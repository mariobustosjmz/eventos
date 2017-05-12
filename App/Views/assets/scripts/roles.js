$(document).ready(function() {

    $("#nuevo_rol #guardar").on('click', function(event) {
        event.preventDefault();

        if (validar()) {
            guardar_rol();
        } else { /**problema con los campos **/ }

    });

    $(document).on('click', '.roles a.editar', function(event) {
        event.preventDefault();
        var id_rol = ($(this).data('id'));
        console.log("click");
        console.log(id_rol);
        if (validar()) {
            $("#editarModal").modal("show");
            get_datos_rol(id_rol);

        } else { /**problema con los campos **/ }
    });

    $("#editar_rol #guardar").on('click', function(event) {
        event.preventDefault();

        if (validar()) {
            editar_rol();
        } else { /**problema con los campos **/ }

    });


    $(document).on('click', '.roles a.eliminar', function(event) {
        var r = confirm("Seguro que desea Eliminar?");
        if (r == true) {

            event.preventDefault();
            var id_rol = ($(this).data('id'));
            console.log("click");
            console.log(id_rol);
            if (validar()) {
                eliminar_rol(id_rol);

            } else { /**problema con los campos **/ }

        }
    });


    function get_datos_rol(id_rol) {

        $.ajax({
                url: location.search + '/rol/' + id_rol,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(resp) {

                console.log(resp);
                console.log(resp.data);


                $("#editar_rol #nombre").val(resp.data.nombre);
                $("#editar_rol #nivel").val(resp.data.nivel);
                $("#editar_rol #id_rol").val(resp.data.id_rol);



            })
            .fail(function(resp) {

                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 6000,

                });
            });

    }


    function editar_rol() {
        var formulario = $("#editar_rol").serializeArray();



        $.ajax({
                url: location.search + '/editar_rol',
                type: 'GET',
                dataType: 'json',
                data: formulario = formulario,
            })
            .done(function(resp) {
                console.log(resp);
                if (resp.mensaje) {
                    $.snackbar({
                        content: "Editado Correctamente",
                        style: "toast",
                        timeout: 3000,
                        onClose: function() { location.reload(); }

                    });

                }
            })
            .fail(function(resp) {

                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 6000,

                });
            })
            .always(function(resp) {
                limpiarform();
            });

    }

    function guardar_rol() {


        var formulario = $("#nuevo_rol").serializeArray();

        $.ajax({
                url: location.search + '/guardar_rol',
                type: 'GET',
                dataType: 'json',
                data: formulario = formulario,
            })
            .done(function(resp) {
                console.log(resp);
                if (resp.mensaje) {


                    $.snackbar({
                        content: "Registrador Correctamente",
                        style: "toast",
                        timeout: 3000,
                        onClose: function() { location.reload(); }

                    });




                }
            })
            .fail(function(resp) {

                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 6000,

                });
            })
            .always(function(resp) {
                limpiarform();

            });

    }

    function eliminar_rol(id_rol) {
        $.ajax({
                url: location.search + '/borrar_rol/' + id_rol,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(resp) {
                console.log(resp);
                if (resp.mensaje) {

                    $.snackbar({
                        content: "Eliminado Correctamente",
                        style: "toast",
                        timeout: 3000,
                        onClose: function() { location.reload(); }

                    });




                }
            })
            .fail(function(resp) {

                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 6000,

                });
            })
            .always(function(resp) {
                limpiarform();

            });

    }

    function validar() {
        return true;
    }

    function limpiarform() {
        $("input").val('');
        $(".modal").modal("hide");

        return true;
    }


});
