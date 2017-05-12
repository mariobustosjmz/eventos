



<?php include VIEWS_PATH.'/template/header.php';?>
<?php include VIEWS_PATH.'/template/navbar.php';?>
<div class="container">

   <div class="row">
      <div class="col-lg-12">

        <div class="bs-component">
          <div class="jumbotron">
            <h1>Usuarios</h1>
            <p><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevoModalUsuarios">Agregar Nuevo</a></p>
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
                          <h1 id="tables">Lista de Usuarios</h1>
                      </div>

                      <div class="bs-component">
                          <table id="lista_usuarios" class="usuarios table table-striped table-hover table-sm table-responsive ">
                            <thead>
                              <tr>
                               <th class="hidden">id </th>
                               <th  class="text-center">Nombre </th>
                               <th  class="text-center">Correo </th>
                               <th  class="text-center">Rol </th>
                               <th  class="text-center">Alta </th>
                               <th  class="text-center">Acciones</th>
                           </tr>



                       </thead>

                       <tbody>
<?php foreach ($data["usuarios"] as $usuario) {?>
	                        <tr>
	                            <td class="text-center hidden"><?php echo $usuario["id_usuario"]?></td>
	                            <td class="text-center" ><?php echo $usuario["nombre"]?></td>
	                            <td class="text-center" ><?php echo $usuario["correo"]?></td>
	                            <td class="text-center" ><?php echo $usuario["rol_id"]?></td>
	                            <td class="text-center" ><?php echo $usuario["fecha_alta"]?></td>
	                            <td class="text-center">
	                            <a data-id="<?php echo $usuario["id_usuario"];?> " href="#" class="editar btn btn-xs btn-info">
	                            <i class="mdi-editor-mode-edit small-ico  "></i>
	                            </a>
	                            <a data-id="<?php echo $usuario["id_usuario"];?>" href="#" class="eliminar btn btn-xs btn-danger">
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







<?php include VIEWS_PATH.'/template/footer.php';?>



