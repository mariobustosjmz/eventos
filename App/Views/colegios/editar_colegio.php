

<div id="editarModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
					<form id="editar_colegio"  class="form-horizontal">

			<div class="modal-body">
				<div cl-ass="col-lg-6">
						<fieldset>
							<legend>Formulario Edicion Colegio</legend>

							<div class="form-group">
								<label for="nombre" class="col-lg-2 control-label">Nombre</label>

								<div class="col-lg-10">
									<input   type="hidden" class="form-control" name="id_colegio"  id="id_colegio" >
									<input required type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre del Colegio">
								</div>

							</div>




							<div class="form-group">
								<label for="ubicacion" class="col-lg-2 control-label">Ubicacion</label>

								<div class="col-lg-10">
									<input required type="text" class="form-control" name="ubicacion"  id="ubicacion" placeholder="Ubicacion del Colegio">
								</div>

							</div>






							<div class="form-group">
								<label for="ubicacion" class="col-lg-2 control-label">Alumnos</label>

								<div class="col-lg-10">
									<input required type="number" class="form-control" name="alumnos"  id="alumnos" placeholder="Capacidad de Alumnos en Colegio">
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


