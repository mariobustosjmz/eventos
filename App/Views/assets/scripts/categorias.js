$(document).ready(function() {

    $("#nuevo_categoria #guardar").on('click', function(event) {
        event.preventDefault();

        if (validar()) {
            guardar_categoria();
        } else { /**problema con los campos **/ }

    });

    $(document).on('click', '.categorias a.editar', function(event) {
        event.preventDefault();
        var id_categoria = ($(this).data('id'));
        console.log("click");
        console.log(id_categoria);
        if (validar()) {
            $("#editarModal").modal("show");
            get_datos_categoria(id_categoria);

        } else { /**problema con los campos **/ }
    });

    $("#editar_categoria #guardar").on('click', function(event) {
        event.preventDefault();

        if (validar()) {
            editar_categoria();
        } else { /**problema con los campos **/ }

    });


    $(document).on('click', '.categorias a.eliminar', function(event) {
        var r = confirm("Seguro que desea Eliminar?");
        if (r == true) {

            event.preventDefault();
            var id_categoria = ($(this).data('id'));
            console.log("click");
            console.log(id_categoria);
            if (validar()) {
                eliminar_categoria(id_categoria);

            } else { /**problema con los campos **/ }

        }
    });


    function get_datos_categoria(id_categoria) {

        $.ajax({
                url: location.search + '/categoria/' + id_categoria,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(resp) {

                console.log(resp);
                console.log(resp.data);


                $("#editar_categoria #nombre").val(resp.data.nombre);
                $("#editar_categoria #descripcion").val(resp.data.descripcion);
                $("#editar_categoria #id_categoria").val(resp.data.id_categoria);



            })
            .fail(function(resp) {

                $.snackbar({
                    content: "Error " + resp.responseText,
                    style: "toast error",
                    timeout: 6000,

                });
            });

    }


    function editar_categoria() {
        var formulario = $("#editar_categoria").serializeArray();



        $.ajax({
                url: location.search + '/editar_categoria',
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

    function guardar_categoria() {


        var formulario = $("#nuevo_categoria").serializeArray();

        $.ajax({
                url: location.search + '/guardar_categoria',
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

    function eliminar_categoria(id_categoria) {
        $.ajax({
                url: location.search + '/borrar_categoria/' + id_categoria,
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
