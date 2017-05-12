$(document).ready(function() {


    $("#fileuploader").uploadFile({
        url: location.search + '/upload/',
        //url: "upload.php",
        dragDrop: true,
        fileName: "myfile",
        returnType: "json",
        showDelete: true,
        showDownload: true,
        maxFileSize: 2000 * 1024,
        showPreview: true,
        previewHeight: "100px",
        previewWidth: "100px",
        multiple: false,
        maxFileCount: 1,
        //type: "GET",



        onLoad: function(obj) {
            $.ajax({
                cache: false,
                url: location.search + '/load/',
                //url: "load.php",
                dataType: "json",
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        obj.createProgress(data[i]["name"], data[i]["path"], data[i]["size"]);
                    }

                    console.info(data);
                }
            });
        },
        deleteCallback: function(data, pd) {
            for (var i = 0; i < data.length; i++) {
                $.post(location.search + '/delete/', { op: "delete", name: data[i] },
                    function(resp, textStatus, jqXHR) {
                        //Show Message
                        alert("File Deleted");
                    });
            }
            pd.statusbar.hide(); //You choice.

        },
        downloadCallback: function(filename, pd) {
            location.href = location.search + '/download/filename/' + filename;

        }
    });







});
