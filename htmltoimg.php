<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>prueba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <!-- js de canvas -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>

    <script type="text/javascript" src="js/funciones.js"></script>
    <?php include('links.php');?>

</head>
    <body class="body_inicio_empresas">

        <!-- Div que se convierte imagen -->
        <div id="plantilla" style="width: 500px;padding-left: 25px; padding-top: 10px;">
            <strong>Prueba, te amo bae</strong> 
            <input type="text" name="" id="" class="form-control" >
        </div>
        <br>
        <!-- boton de vista previa -->
        <input id="btnPreview" type="button" value="Preview"/>
        <!-- Boton de descargar -->
        <a id="btnDescargar" href="#">Download</a>
        <br/>
        <!-- Vista previa -->
        <div id="previewImage"> </div>


    <script>
        $(document).ready(function(){
            
        var element = $("#plantilla"); // ID del div
        var getCanvas; 
        
            $("#btnPreview").on('click', function () { //id del boton vista previa
                html2canvas(element, {
                onrendered: function (canvas) {
                        $("#previewImage").append(canvas);
                        getCanvas = canvas;
                    }
                });
            });

            $("#btnDescargar").on('click', function () { //id boton de descargar
            var imgageData = getCanvas.toDataURL("image/png"); //default
            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream"); 
            $("#btnDescargar").attr("download", "imagen.png").attr("href", newData); //Boton descargar (id) pasa nombre de la img
            });

        });

    </script>

    </body>
</html>