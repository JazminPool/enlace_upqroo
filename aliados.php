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
                    <td scope="col" class="col-md-2 align-middle"># Convenio</td> <!--Columna-->
                    <td scope="col" class="col-md-5 align-middle">Nombre de la empresa</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Página Oficial</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Detalles de aliado</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Acciones</td> <!--Columna-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   <?PHP
		               include("conexion_datos.php");
			             Conexion_datos::aliados_funcion();
	                	?>   
                  </tr>
                </tbody>
              </table>
      </section>
    </div><!--Fin de cuerpo-->

    <!--Inicia modal-->

     <!--Finaliza modal-->


    <!-- Bootstrap JavaScript -->
    <script src="source/jquery/jquery.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="source/jquery-easing/jquery.easing.min.js"></script>
    <!-- JavaScript de bootrap -->
    <script src="js/resume.min.js"></script>

  </body>
</html>