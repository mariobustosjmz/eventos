<div id="nuevoModalUsuarios" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>
<form id="nuevo_usuario"  class="form-horizontal">

<div class="modal-body">
	<div cl-ass="col-lg-6">
		<fieldset>
			<legend>Formulario Alta Usuario</legend>

			<div class="form-group">
				<label for="nombre" class="col-lg-2 control-label">Nombre</label>

				<div class="col-lg-10">
					<input required type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre del Usuario">
				</div>

			</div>




			<div class="form-group">
				<label for="correo" class="col-lg-2 control-label">Correo</label>

				<div class="col-lg-10">
					<input required type="email" class="form-control" name="correo"  id="correo" placeholder="Correo del Usuario">
				</div>

			</div>


			<div class="form-group">
				<label for="contrasena" class="col-lg-2 control-label">Contraseña</label>

				<div class="col-lg-10">
					<input required type="password" class="form-control" name="contrasena"  id="contrasena" placeholder="Contraseña del Usuario">
				</div>

			</div>


			<div class="form-group">
				<label for="rol_id" class="col-lg-2 control-label">Rol</label>

				<div class="col-lg-10">
					<select class="form-control" name="rol_id" id="rol_id">

					<option>Seleccione ...</option>

<?php foreach ($roles as $key => $rol) {?>

						<option value="<?php echo $rol['id_rol'];?> "> <?php echo $rol['nombre'];
	?></option>

	<?php }?>
</select>

				</div>

			</div>





		</fieldset>
	</div>
	<div class="col-lg-4 col-lg-offset-1">

	</div>


</div>

<div class="modal-footer">





	<div class="col-lg-10 col-lg-offset-2">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

		<button id="guardar"  type="submit" class="btn btn-primary">Guardar</button>
	</div>

</div>
</div>

</form>

</div>
</div>


