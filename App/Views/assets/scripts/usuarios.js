$(document).ready(function() {

    $("#nuevo_usuario #guardar").on('click', function(e) {
        e.preventDefault();
        var formulario = $("#nuevo_usuario").serializeArray();

        if (validar()) {

            guardar_usuario(formulario);

        } else {

            console.log("error al validar");
        }

    });







    function guardar_usuario(form) {

        $.ajax({
                url: location.search + '/guardar_usuario',
                type: 'GET',
                dataType: 'json',
                data: formulario = form,
            })
            .done(function(resp) {
                console.log(resp);

                if (resp.mensaje) {

                    $.snackbar({
                        content: "Registrador Correctamente " + resp.test2,
                        style: "toast",
                        timeout: 3000,
                        onClose: function() {}

                    });

                    get_usuarios();
                }


            })
            .fail(function(resp) {


                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 3000

                });



            })
            .always(function() {


                limpiar_form();

            });




    }

    function limpiar_form() {
        $("input").val('');
        $(".modal").modal('hide');


    }


    function validar() {
        return true;
    }



    function get_usuarios() {

        $.ajax({
                url: location.search + '/getUsuarios',
                type: 'get',
                dataType: 'json'
            })
            .done(function(usuarios) {
                console.log(usuarios);

                var data = "";
                $.each(usuarios, function(index, val) {
                    console.log(index);
                    console.info(val);


                    data += "<tr>";
                    data += "<td class='text-center hidden'>" + val.id_usuario + "</td>";
                    data += "<td class='text-center' >" + val.nombre + "</td>";
                    data += "<td class='text-center' >" + val.correo + "</td>";
                    data += "<td class='text-center' >" + val.rol_id + "</td>";
                    data += "<td class='text-center' >" + val.fecha_alta + "</td>";
                    data += "<td class='text-center'>";
                    data += "<a data-id=" + data.id_usuario + " href='#' class='editar btn btn-xs btn-info'>";
                    data += "<i class='mdi-editor-mode-edit small-ico  '></i>";
                    data += "</a>";
                    data += "<a data-id=" + data.id_usuario + " href='#' class='eliminar btn btn-xs btn-danger'>";
                    data += "<i class='mdi-action-delete small-ico'></i>";
                    data += "</a>";
                    data += "</td>";
                    data += "</tr>";




                });
                console.warn(data);
                $("#lista_usuarios tbody").html(data);


            })
            .fail(function(respuesta) {
                console.log(respuesta);
            })
            .always(function() {
                console.log("complete");
            });










    }


});
