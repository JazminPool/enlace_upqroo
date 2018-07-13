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
        <h3>Aliados estratégicos</h3> <br>
            <table class="tabla table table-responsive-md table-bordered align-center font-weight-light">
                <thead id="tablas"><!--inicio de cabecera que contiene columnas-->
                  <tr class="cabecera_table">
                    <td scope="col" class="col-md-3 align-middle"># Convenio</td> <!--Columna-->
                    <td scope="col" class="col-md-5 align-middle">Nombre de la empresa</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Página Oficial</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Detalles</td> <!--Columna-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row" class="align-middle">1</td> <!--Fila-->
                    <td class="align-middle">Ejemplo de nombre</td> <!--Fila-->
                    <td class="align-middle">
                      <button type="button" class="btn btn-danger bordes-boton btn-sm my-0 waves-effect waves-light">
                        Ir
                      </button>
                    </td> <!--Fila-->
                    <td class="align-middle">
                      <button type="button" data-toggle="modal" data-target="#modal_detalles_afiliados" class="btn btn-danger bordes-boton btn-sm my-0 waves-effect waves-light">
                        Ver detalles
                      </button>
                    </td> <!--Fila-->
                  </tr>
                </tbody>
              </table>
      </section>
    </div><!--Fin de cuerpo-->

    <!--Inicia modal-->
    <div class="modal fade" id="modal_detalles_afiliados" tabindex="-1" role="dialog" aria-labelledby="modal_detalles_afiliadosLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nombre de la empresa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div><!--Finaliza modal-header-->
          <div class="row justify-content-md-center">   
            <div class="col-lg-8">    
              <div class="modal-body">
                <div class="card vertical_centro" style="width: 18rem;">
                  <img class="card-img-top" src="img/lorena.png" alt="Logotipo de empresa"> <!--Aquí debe ir el logo-->
                  <div class="card-body fuente_monse fuente_especial">
                    <p class="card-text">
                      Telefono: 998 745 87 41
                    </p>
                    <p class="card-text">
                      Contacto: abdes@gmail.com
                    </p>
                  </div>
                </div>
              </div><!--Finaliza modal-loby-->
            </div><!--Finaliza col-md-6-->
          </div> <!--Finaliza row-->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div> <!--Finaliza modal-->


    <!-- Bootstrap JavaScript -->
    <script src="source/jquery/jquery.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="source/jquery-easing/jquery.easing.min.js"></script>
    <!-- JavaScript de bootrap -->
    <script src="js/resume.min.js"></script>

  </body>
</html>