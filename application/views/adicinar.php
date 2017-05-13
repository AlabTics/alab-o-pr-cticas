<?php defined ('SYSPATH') OR die ('No direct scrpt access.'); ?>
<?=Form::open('kohana/salvar')?> <!– <- Va el nombre de la acción–>

<h1>AGREGAR UN NUEVO USUARIO</h1>

<table align="center">
	<tr>
		<td><div>Email</div></td>
		<td><div><?=Form::input('email',$usuario->email)?></div></td>
	</tr>
	<tr>
		<td><div>Contraseña</div></td>
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

	

	<tr>
		<td><div>Fecha de Nacimiento</div></td>
		<td><div><?=Form::input('fechaNaci','aaaa-mm-dd', $usuario->fechaNaci)?></div></td>
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
			<!– form::submit para enviar datos–>
			<?=Form::hidden('id',$usuario->id)?>
			<?=Form::submit('btn_submit','Agregar')?>
			<?=html::anchor('kohana/','Cancelar')?>
		</td>
	</tr>
</table>
<?=Form::close()?>