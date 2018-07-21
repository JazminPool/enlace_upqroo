<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Enlace upqroo</title>

    <?php include('links.php');?>

  </head>

  <body id="page-top" class="body-nav">
    <?php include('nav.php');?>

    <div class="cuerpo">
      <section class="resume-section p-5" id="aliados">
        <h3>Solicitudes para publicaciones</h3> <br>
            <table class="tabla table table-responsive-md table-bordered align-center font-weight-light">
                <thead id="tablas" class="table-peticiones-color-head"><!--inicio de cabecera que contiene columnas-->
                  <tr class="cabecera_table">
                    <td scope="col" class="col-md-2 align-middle"># Convenio</td> <!--Columna-->
                    <td scope="col" class="col-md-4 align-middle">Nombre de la empresa</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Petición</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Acción</td> <!--Columna-->
                  </tr>
                </thead>
                <tbody>
                  <tr> 
                    <td scope="row" class="align-middle">1</td> <!--Fila-->
                    <td class="align-middle">Ejemplo de nombre</td> <!--Fila-->
                    <td class="align-middle">
                      <button type="button" class="btn btn-aver boton-aver btn-sm my-0 waves-effect waves-light">
                        <i class="material-icons">remove_red_eye</i>
                      </button>
                    </td> <!--Fila-->
                    <td class="align-middle">
                      <button type="button" class="btn btn-aprobar boton-done btn-sm my-0 waves-effect waves-light">
                        <i class="material-icons icon-done">done</i>
                      </button>
                      <button type="button" class="btn btn-rechazar boton-rechazar btn-sm my-0 waves-effect waves-light">
                        <i class="material-icons icon-delete">delete_forever</i>
                      </button>
                    </td> <!--Fila-->
                    </td> <!--Fila-->
                  </tr>
                  
                </tbody>
              </table>
      </section>
    </div><!--Fin de cuerpo-->



    <!-- Bootstrap JavaScript -->
    <script src="source/jquery/jquery.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="source/jquery-easing/jquery.easing.min.js"></script>
    <!-- JavaScript de bootrap -->
    <script src="js/resume.min.js"></script>

  </body>
</html>