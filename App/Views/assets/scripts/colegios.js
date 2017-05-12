$(document).ready(function() {



    $("#nuevo_colegio #guardar").on('click', function(event) {
        event.preventDefault();

        if (validar()) {
            guardar_colegio();
        } else { /**problema con los campos **/ }

    });

    $(document).on('click', '.colegios a.editar', function(event) {
        event.preventDefault();
        var id_colegio = ($(this).data('id'));
        console.log("click");
        console.log(id_colegio);
        if (validar()) {
            $("#editarModal").modal("show");
            get_datos_colegio(id_colegio);

        } else { /**problema con los campos **/ }
    });

    $("#editar_colegio #guardar").on('click', function(event) {
        event.preventDefault();

        if (validar()) {
            editar_colegio();
        } else { /**problema con los campos **/ }

    });


    $(document).on('click', '.colegios a.eliminar', function(event) {
        var r = confirm("Seguro que desea Eliminar?");
        if (r == true) {

            event.preventDefault();
            var id_colegio = ($(this).data('id'));
            console.log("click");
            console.log(id_colegio);
            if (validar()) {
                eliminar_colegio(id_colegio);

            } else { /**problema con los campos **/ }

        }
    });


    function get_datos_colegio(id_colegio) {

        $.ajax({
                url: location.search + '/colegio/' + id_colegio,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(resp) {

                console.log(resp);
                console.log(resp.data);


                $("#editar_colegio #nombre").val(resp.data.nombre);
                $("#editar_colegio #ubicacion").val(resp.data.ubicacion);
                $("#editar_colegio #alumnos").val(resp.data.alumnos);
                $("#editar_colegio #id_colegio").val(resp.data.id_colegio);



            })
            .fail(function(resp) {

                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 6000,

                });
            });

    }


    function editar_colegio() {
        var formulario = $("#editar_colegio").serializeArray();



        $.ajax({
                url: location.search + '/editar_colegio',
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

    function guardar_colegio() {

        var formulario = $("#nuevo_colegio").serializeArray();


        $.ajax({
                url: location.search + '/guardar_colegio',
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

    function eliminar_colegio(id_colegio) {
        $.ajax({
                url: location.search + '/borrar_colegio/' + id_colegio,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(resp) {
                id_colegio
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
        $(".modal").modal('hide');
        return true;
    }


});
