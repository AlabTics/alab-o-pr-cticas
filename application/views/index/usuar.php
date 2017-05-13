<?php defined('SYSPATH') or die('No direct script access.'); ?>

<h1>LISTADO DE USUARIOS</h1>

<H2>(<?=HTML::anchor('kohana/formulario/','Agregar Nuevo Usuario')?>)</H2>


<table border="1 px" align="center">
	<tr email='trl'>
		<td>Email</td>
		<td>Contraseña</td>
		<td>Nombre</td>
		<td>Apellidos</td>
		<td>Genero</td>
		<td>Fecha de Nacimiento</td>
		<td>idTipoUsuario</td>
		<td>Accion</td>
	</tr>
	<?php foreach ($usuarios as $usuario) { ?>
	<tr>
		<td><?=$usuario->email?></td>
		<td><?=$usuario->contrasena?></td>
		<td><?=$usuario->nombre?></td>
		<td><?=$usuario->apellidos?></td>
		<td><?=$usuario->genero?></td>
		<td><?=$usuario->fechaNaci?></td>
		<td><?=$usuario->idTipoUsuario?></td>

		<td>
			<?=HTML::anchor('kohana/editar/'.$usuario->id,'EDITAR')?> |
			<?=HTML::anchor('kohana/borrar/'.$usuario->id,'BORRAR')?>
		</td>
	</tr>

<?php }
?>	
</table>