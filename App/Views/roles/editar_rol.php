

<div id="editarModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
					<form id="editar_rol"  class="form-horizontal">

			<div class="modal-body">
				<div cl-ass="col-lg-6">
						<fieldset>
							<legend>Formulario Edicion Rol</legend>

							<div class="form-group">
								<label for="nombre" class="col-lg-2 control-label">Nombre</label>

								<div class="col-lg-10">
									<input   type="hidden" class="form-control" name="id_rol"  id="id_rol" >
									<input required type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre del Rol">
								</div>

							</div>




							<div class="form-group">
								<label for="nivel" class="col-lg-2 control-label">Nivel</label>

								<div class="col-lg-10">
									<input required type="text" class="form-control" name="nivel"  id="nivel" placeholder="Descripcion de Rol">
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


