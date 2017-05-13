<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?=Form::open('kohana/salvar')?>

<h1>EDITAR USUARIO</h1>


<table align="center">
	<tr>
		<td><div>Email:</div></td>
		<td><div><?=Form::input('email',$usuario->email)?></div></td>
	</tr>

	<tr>
		<td><div>Contraseña:</div></td>
		<td><div><?=Form::input('contrasena',$usuario->contrasena)?></div></td>
	</tr>

	<tr>
		<td><div>Nombre</div></td>
		<td><div><?=Form::input('nombre',$usuario->nombre)?></div></td>
	</tr>

	<tr>
		<td><div>Apellidos</div></td>
		<td><div><?=Form::input('apellidos',$usuario->apellidos)?></div></td>
	</tr>

	<tr>
		<td><div>Genero</div></td>
		<td>
			<select name="genero">
				<option value="F">Femenino</option>
				<option value="M">Masculino</option>
			</select>
		</td>
	</tr>

	<td><div>Fecha de Nacimiento</div></td>
	<td><div><?=Form::input('fechaNaci', $usuario->fechaNaci)?></div></td>
	</tr>

	<tr>
		<td><div>Tipo de Usuario</div></td>
		<td>
			<select name="idTipoUsuario">
				<option value="1">Inactivo</option>
				<option value="2">Empleado</option>
				<option value="3">Estudiante</option>
				<option value="4">Administrativo</option>
				<option value="5">Seguridad</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<?=Form::hidden('id',$usuario->id)?>
			<?=Form::submit('btn_submit','Actualizar')?> 
			<?=html::anchor('kohana/','Cancelar')?>
			<!– ]Verificar el tipo de etiqueta es decir tiene que ser submit o buuton–>
		</td>
	</tr>
</table>

<?=Form::close()?>