



<?php include VIEWS_PATH . '/template/header.php';?>
<?php include VIEWS_PATH . '/template/navbar.php';?>


<div class="container">

   <div class="row">
      <div class="col-lg-12">

        <div class="bs-component">
          <div class="jumbotron">
            <h1>Eventos</h1>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevoModalEventos">Agregar Nuevo</a></p>
        </div>
    </div>
</div>
</div>



<div class="row">
    <div class="bs-docs-section">

        <div class="col-lg-12">
            <div class="bs-component">
              <div class="well well-sm">
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="page-header">
                          <h1 id="tables">Lista de Eventos</h1>
                      </div>

                      <div class="bs-component">
                          <table class="eventos table table-striped table-hover table-sm table-responsive ">
                            <thead>
                              <tr>
                               <th class="hidden">id </th>
                               <th  class="text-center">Titulo </th>
                               <th  class="text-center">Contenido </th>
                               <th  class="text-center">Colegio </th>
                               <th  class="text-center">Inicio </th>
                               <th  class="text-center">Fin </th>
                               <th  class="text-center">Publicacion </th>
                               <th  class="text-center">Categoria </th>
                               <th  class="text-center">Adjunto </th>
                               <th  class="text-center">Acciones</th>
                           </tr>



                       </thead>

                       <tbody>
                        <?php foreach ($data["eventos"] as $evento) {?>
                        <tr>
                            <td class="text-center hidden"><?php echo $evento["id_evento"] ?></td>
                            <td class="text-center" ><?php echo $evento["titulo"] ?></td>
                            <td class="text-center" ><?php echo $evento["contenido"] ?></td>
                            <td class="text-center" ><?php echo $evento["nombre_colegio"] ?></td>
                            <td class="text-center" ><?php echo $evento["inicio"] ?></td>
                            <td class="text-center" ><?php echo $evento["fin"] ?></td>
                            <td class="text-center" ><?php echo $evento["publicacion"] ?></td>
                            <td class="text-center" ><?php echo $evento["nombre_categoria"] ?></td>
                            <td class="text-center" ><?php echo $evento["adjunto"] ?></td>
                             <td class="text-center">
                            <a data-id="<?php echo $evento["id_evento"]; ?> " href="#" class="editar btn btn-xs btn-info">
                            <i class="mdi-editor-mode-edit small-ico  "></i>
                            </a>
                            <a data-id="<?php echo $evento["id_evento"]; ?> " href="#" class="eliminar btn btn-xs btn-danger">
                            <i class="mdi-action-delete small-ico"></i>
                            </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>


                </table>
            </div>
            <!-- /example -->
        </div>
    </div>
</div>
</div>
</div>


</div>
</div>


</div>







<?php include VIEWS_PATH . '/template/footer.php';?>



