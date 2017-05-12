

<div id="nuevoModalEventos" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<form id="nuevo_evento"  class="form-horizontal">

				<div class="modal-body">
					<div cl-ass="col-lg-6">
						<fieldset>
							<legend>Formulario Alta Evento</legend>

							<div class="form-group">
								<label for="titulo" class="col-lg-2 control-label">Titulo</label>

								<div class="col-lg-10">
									<input required type="text" class="form-control" name="titulo"  id="titulo" placeholder="Titulo del Evento">
								</div>

							</div>

							<div class="form-group">
								<label for="textAreacontenido" class="col-lg-2 control-label">Contenido</label>
								<div class="col-lg-10">
									<textarea placeholder="Descripcion o contenido del Evento" class="form-control" rows="2" id="contenido" name="contenido"></textarea>
								</div>
							</div>



							<div class="form-group">
								<label for="inicio" class="col-lg-2 control-label">Inicio</label>

								<div class="col-md-4">
									<input required type="text" class="form-control datepicker" name="inicio"  id="inicio" placeholder="Inicio del Evento">
								</div>


								<label for="fin" class="col-lg-2 control-label">Fin</label>

								<div class="col-md-4">
									<input required type="text" class="form-control datepicker" name="fin"  id="fin" placeholder="Fin del Evento">
								</div>

							</div>

							<div class="form-group">
								<label for="publicacion" class="col-lg-2 control-label">Publicar</label>

								<div class="col-lg-10">
									<input required type="text" class="form-control datepicker" name="publicacion"  id="publicacion" placeholder="Fin del Evento">
								</div>

							</div>






							<div class="form-group">
								<label for="colegios_id" class="col-lg-2 control-label">Colegios</label>

								<div class="col-lg-10">

									<select multiple="" class="form-control" id="colegios_id"  name="colegios_id" >

										<?php foreach ($colegios as $key => $colegio) {?>


										<option value="<?php echo $colegio['id_colegio']; ?>" ><?php echo $colegio['nombre']; ?> </option>

										<?php }?>
									</select>


								</div>

							</div>

							<div class="form-group">
								<label for="rol_idcategoria_id" class="col-lg-2 control-label">Categoria</label>

								<div class="col-lg-10">
									<select class="form-control" id="rol_idcategoria_id" name="rol_idcategoria_id">
										<option value="0">Seleccione ...</option>

										<?php foreach ($categorias as $key => $categoria) {?>


										<option value="<?php echo $categoria['id_categoria']; ?>" ><?php echo $categoria['nombre']; ?> </option>

										<?php }?>

									</select>

								</div>

							</div>


							<div class="form-group"><hr></div>




							<div class="form-group">
								<label for="adjunto" class="col-lg-2 control-label">Adjunto</label>

								<div class="col-lg-10">

									<div id="fileuploader">Subir...</div>

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


