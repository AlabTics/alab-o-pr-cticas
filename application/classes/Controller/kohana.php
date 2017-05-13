<?php defined('SYSPATH') or die('No direct script access.');

class Controller_kohana extends Controller_Template {

	public $template = 'Templatekohana';

	public function action_index()
	{
		$usuarios = ORM::factory('Usuario')->find_all();
		$tipos = ORM::factory('Usuario')->find_all();
		if (isset($usuarios[0])) {
			$this->template->content = View::factory('index/usuar')->bind('usuarios', $usuarios)-> bind('tipos', $tipos);
		}else{
			$usuarios =array();
			$this->template->content = View::factory('index/usuar')->bind('usuarios', $usuarios) -> bind ('tipos', $tipos);
		}
	}

	public function action_formulario()
	{
		$id = $this->request->param('id');
		$usuario = ORM::factory('usuario',$id);
		$this->template->content = View::factory('adicinar')->bind('usuario', $usuario);
	}

	public function action_editar()
	{
		$id = $this->request->param('id');
		$usuario = ORM:: factory('usuario' ,$id);
		$this->template->content = View::factory('editar')->bind('usuario',$usuario);
	}

	public function action_salvar()
	{

		$usuario = ORM::factory('usuario',$this->request->post('id')); /*En esta linea se recupera el ID del formulario editar y adicionar*/
				
		$usuario->email = $this->request->post('email');
		$usuario->contrasena = $this->request->post('contrasena');
		$usuario->nombre = $this->request->post('nombre');
		$usuario->apellidos = $this->request->post('apellidos');
		$usuario->genero = $this->request->post('genero');
		$usuario->fechaNaci = $this->request->post('fechaNaci');
		$usuario->idTipoUsuario = $this->request->post('idTipoUsuario');

		/*unset($_POST['id']);
		$usuario->values($_POST); /*asignando los valores del formulario a una variable llamada $usuario*/
		/*$usuario->save(); /*esta linea guarda los cambios*/
		/*$this->redirect('kohana'); /*redirecciona al controlador principal*/

		/*$usuario = ORM:: factory('Usuario');*/

		
		/*Falta que guarde el genero y tipo de usuario ni en el programa ni en la base de datos (ya hecho)*/
		
		$usuario->save();

		$this->redirect('kohana');
	}	

	public function action_borrar()
	{
		$id = $this->request->param('id'); /*Recupera el id del formulario*/
		$usuario = ORM::factory('usuario',$id)->delete(); /*se selecciona el usuario por el id y se borra*/
		$this->redirect('kohana');
	}
} // End Welcome
