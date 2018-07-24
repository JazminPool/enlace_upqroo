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
        <div class="row">
          <div class="col">
            <h3>Aliados estratégicos</h3> 
          </div><!--fin col-->
          <div class="col">
            <button type='button' data-toggle='modal' data-target='#agrega_aliado'class='btn btn-add-aliado waves-light'>
              Agregar
            </button>
          </div><!--fin col-->
        </div><!--fin row-->
        <br>
          <table border="10" class="tabla table table-responsive-md table-bordered align-center font-weight-light">
              <thead id="tablas" class="table-aliados-color-head"><!--inicio de cabecera que contiene columnas-->
                <tr class="cabecera_table">
                  <td scope="col" class="col-md-2 align-middle"># Convenio</td> <!--Columna-->
                  <td scope="col" class="col-md-4 align-middle">Nombre de la empresa</td> <!--Columna-->
                  <td scope="col" class="col-md-2 align-middle">Página Oficial</td> <!--Columna-->
                  <td scope="col" class="col-md-2 align-middle">Detalles</td> <!--Columna-->
                  <td scope="col" class="col-md-2 align-middle">Acciones</td> <!--Columna-->
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

  <!--Inicia modal editar aliado-->
  <div class="modal fade" id="edita_aliado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal-header-color-edit">
          <h5 class="modal-title modal-title-edit" id="">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!--Fin header-->
        <div class="modal-body">
          <div class="row col-centrada">
            <div class="col">
              <label>Numero de convenio</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Nombre de la empresa</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>URL del Sitio Oficial</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Telefono de la empresa</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Correo de la empresa</label>
            </div>
            <div class="col">
              <input type="email" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <center>
            <div class="row col-centrada">
              <div class="col">
                <label>Seleccionar logotipo</label>
              </div>
            </div><!--Fin del row-->
            <div class="row col-centrada">  
              <div class="col">
                <div class="form-group">
                  <input type="file" class="form-control-file" id="">
                </div>
              </div>
            </div><!--Fin del row-->
            <button type="button" class="fuente-monse btn btn-info align-derecha">Guardar</button>
          </center>
        </div><!--Fin del modal-body-->
      </div>
    </div>
  </div><!--Finaliza modal de editar aliado-->


  <!--Inicia modal Agregar nuevo aliado-->
  <div class="modal fade" id="agrega_aliado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal-header-color-add">
          <h5 class="modal-title modal-title-edit" id="">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!--Fin header-->
        <div class="modal-body">
          <div class="row col-centrada">
            <div class="col">
              <label>Numero de convenio</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Nombre de la empresa</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>URL del Sitio Oficial</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Telefono de la empresa</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Correo de la empresa</label>
            </div>
            <div class="col">
              <input type="email" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <center>
            <div class="row col-centrada">
              <div class="col">
                <label>Seleccionar logotipo</label>
              </div>
            </div><!--Fin del row-->
            <div class="row col-centrada">  
              <div class="col">
                <div class="form-group">
                  <input type="file" class="form-control-file" id="">
                </div>
              </div>
            </div><!--Fin del row-->
            <button type="button" class="fuente-monse btn btn-add-aliado">Guardar</button>
          </center>
        </div><!--Fin del modal-body-->
      </div>
    </div>
  </div><!--Finaliza modal de agregar aliado-->
  
  <!--Inicia modal 'alert' de eliminar aliado  -->
  <div class="modal fade bd-example-modal-sm" id="delete_aliado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        ¿Seguro que desea eliminar aliado?, esta acción no puede revertirse.
        <button type="button" class="fuente-monse btn btn-danger align-derecha">Borrar</button>
      </div>
    </div><!--Fin modal-dialog-->
  </div><!-- Termina modal de eliminar aliado-->
     

  </body>
</html>