<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- js de canvas -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <title>Empresas</title>
    <?php include('links.php');?>
</head>
<body class="body_inicio_empresas">
    <section class="resume-section p-5">
        <div class="row">
            <div class="col">
                <h3>Nueva publicación</h3>    
            </div><!--FIN col-->
            <div class="col">
                <button type="button" id="btnPreview" class="btn bordes_contenedor btn-enviar align-derecha">Vista previa</button>
                <a id="btnDescargar" class="btn align-derecha btn_add_public" href="#">Download</a>
                <form action="almacenar.php" method="post" enctype="multipart/form-data" name="inscripcion">
                    <input type="file" name="archivo[]" multiple="multiple">
                    <input type="submit" value="Enviar"  class="trig">
                </form>
            </div>
            
        </div><!--FIN row-->
        <center>
            <div>
                <div class="bordes_contenedor medidas_public backg_public" id="plantilla">
                    <div class="cont_logoup">
                        <div class="row">
                            <div class="col-10">
                            <br>
                                <h3>Oportunidad para estancias/estadías</h3>
                                <h5>Nombre de la empresa</h5>
                            </div><!--Fin de columna-->
                            <div class="col">
                                <img src="img/logo.png" class="imgback_public" alt="UPQROO">
                            </div><!--Fin de columna-->
                        </div><!--Fin del row-->
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label class="text_left txt_title_public">Área de vacante:</label>
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                                <input type="text" class="txf_public_ fuente_monse">
                            </div>  
                        </form><!--Fin del form de "area de vacante"-->
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <small class="text_left txt_title_public">Actividades a desarrollar:</small>
                            </div>
                        </form><!--Fin del form de "actividades a desarrollar"-->
                        <form class="form-inline">
                            <div class="form-group mx-sm-2 mb-2">
                                <textarea class="txf_public fuente_monse txa_public" rows="5"></textarea>
                            </div>  
                        </form><!--Fin del form de "actividades a desarrollar"-->
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <small class="text_left txt_title_public">Requisitos y apoyo que ofrece:</small>
                            </div>
                        </form><!--Fin del form de "Requisitos"-->
                        <form class="form-inline">
                            <div class="form-group mx-sm-2 mb-2">
                                <textarea class="txf_public fuente_monse txa_public" rows="5"></textarea>
                            </div>  
                        </form><!--Fin del form de "Requisitos"-->
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <small class="text_left txt_title_public">Datos del contacto:</small>
                            </div>
                        </form><!--Fin del form de "Requisitos"-->
                        <form class="form-inline">  
                            <div class="form-group mx-sm-2 mb-2">
                                <textarea class="txf_public fuente_monse" rows="3"></textarea>
                            </div>  
                        </form><!--Fin del form de "Requisitos"-->
                    </div><!--Fin del div contenedor principal de la iamgen-->
                </div><!--Fin del div con bordes-->
            </div> <!--Fin del div que tiene el id para convertir a img--> 
            <br>
            <span class="badge badge-danger fuente_monse">
                Si el texto de 'Actividad a desarrollar' o 'Requisitos' no alcanzan en el espacio predeterminado, 
                por favor, <br> desliza hacia abajo el area para que el texto que esté dentro, se vea completo 
                en la imagen; de lo contrario, se verá incompleto. <br> Gracias, <strong>Buen día!</strong>
            </span>
            <br><br>
            <div id="previewImage">
                <!-- Aqui esta kla vistaprevia -->
            </div> <!--Fin del Div que tiene la vista previa-->
        </center>
    </section>
    


    <!-- Script para convertir el div a img -->
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

            //Dice bae que aqui deberia enviarse en vez de descargar
            $("#btnDescargar").attr("download", "imagen.png").attr("href", newData); //Boton descargar (id) pasa nombre de la img
            });
        });

      

    </script> <!--Fin del Script div a img-->




</body>
</html>