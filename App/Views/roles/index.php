



<?php include VIEWS_PATH . '/template/header.php';?>
<?php include VIEWS_PATH . '/template/navbar.php';?>



<div class="container">

   <div class="row">
      <div class="col-lg-12">

        <div class="bs-component">
          <div class="jumbotron">
            <h1>Roles</h1>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevoModalRoles">Agregar Nueva</a></p>
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
                          <h1 id="tables">Lista de Roles</h1>
                      </div>

                      <div class="bs-component">
                          <table class="roles table table-striped table-hover table-sm table-responsive ">
                            <thead>
                              <tr>
                               <th class="hidden">id </th>
                               <th  class="text-center">Rol </th>
                               <th  class="text-center">Nivel </th>
                                <th  class="text-center">Alta </th>
                               <th  class="text-center">Acciones</th>
                           </tr>



                       </thead>

                       <tbody>
                        <?php foreach ($data["roles"] as $rol) {?>
                        <tr>
                            <td class="text-center hidden"><?php echo $rol["id_rol"] ?></td>
                            <td class="text-center" ><?php echo $rol["nombre"] ?></td>
                            <td class="text-center" ><?php echo $rol["nivel"] ?></td>
                             <td class="text-center" ><?php echo $rol["fecha_alta"] ?></td>
                            <td class="text-center">
                            <a data-id="<?php echo $rol["id_rol"]; ?> " href="#" class="editar btn btn-xs btn-info">
                            <i class="mdi-editor-mode-edit small-ico  "></i>
                            </a>
                            <a data-id="<?php echo $rol["id_rol"]; ?> " href="#" class="eliminar btn btn-xs btn-danger">
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



