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
            <h3>Fechas de estancias / estadías</h3>    
          </div><!--FIN col-->
          <div class="col">
            <button type='button' data-toggle='modal' data-target='#agrega_convocatoria'class='btn btn-add-aliado waves-light'>
              Agregar
            </button>
          </div>
        </div><!--FIN row-->
        <br>
          <!-- INICIA TABLA -->
            <table class="tabla table table-responsive-md table-bordered align-center font-weight-light">
                <thead id="tablas" class="table-fechas-color-head"><!--inicio de cabecera que contiene columnas-->
                  <tr class="cabecera_table">
                    <td scope="col" class="col-md-2 align-middle">Tipo</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Fechas</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Carreras</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Documento</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Action</td> <!--Columna-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row" class="align-middle">
                      Estancias
                    </td> <!--Fila-->
                    <td class="align-middle">
                      12/12/12
                    </td> <!--Fila-->
                    <td class="align-middle">
                      Ingeniería en Software
                    </td> <!--Fila-->
                    <td class="align-middle">Documento</td> <!--Fila-->
                    <td class="align-middle">
                      <button type='button' data-toggle='modal' data-target='#edita_convocatoria' class='btn btn-info bordes-boton btn-sm my-0 waves-effect waves-light'>
                        Editar
                      </button>
                      <button type='button' data-toggle='modal' data-target='#delete_convocatoria' class='btn btn-danger bordes-boton btn-sm my-0 waves-effect waves-light'>
                        Eliminar
                      </button>
                    </td> <!--Fila-->
                    </td> <!--Fila-->
                  </tr>
                </tbody>
              </table> 
              <!-- FINALIZA TABLA -->
      </section>
    </div><!--Fin de cuerpo-->

  <!--Inicia modal agreagr convocatoria-->
  <div class="modal fade" id="agrega_convocatoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal-header-color-add">
          <h5 class="modal-title modal-title-edit" id="">Agregar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!--Fin header-->
        <div class="modal-body">
          <div class="row col-centrada">
            <div class="col">
              <label>Tipo de convocatoria</label>
            </div>
            <div class="col">
              <select id="" class="form-control-sm form-control txt_center">
                <option>Estancias</option>
              </select>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Fecha de la convocatoria</label>
            </div>
            <div class="col">
              <input id="" type="date" class="txt_center form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Carrera</label>
            </div>
            <div class="col">
              <select id="" class="form-control-sm form-control txt_center">
                <option>Ing. Software</option>
              </select>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Tipo de documento</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <button type="button" class="fuente-monse btn btn-add-aliado align-derecha">Guardar</button>
        </div><!--Fin del modal-body-->
      </div>
    </div>
  </div><!--Finaliza modal de editar convocatoria-->

  <!--Inicia modal editar convocatoria-->
  <div class="modal fade" id="edita_convocatoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label>Tipo de convocatoria</label>
            </div>
            <div class="col">
              <select id="" class="form-control-sm form-control txt_center">
                <option>Estancias</option>
              </select>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Fecha de la convocatoria</label>
            </div>
            <div class="col">
              <input id="" type="date" class="txt_center form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Carrera</label>
            </div>
            <div class="col">
              <select id="" class="form-control-sm form-control txt_center">
                <option>Ing. Software</option>
              </select>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Tipo de documento</label>
            </div>
            <div class="col">
              <input type="text" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <button type="button" class="fuente-monse btn btn-info align-derecha">Guardar</button>
        </div><!--Fin del modal-body-->
      </div>
    </div>
  </div><!--Finaliza modal de editar convocatoria-->
  
  <!--Inicia modal 'alert' de eliminar convocatoria  -->
  <div class="modal fade bd-example-modal-sm" id="delete_convocatoria" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        ¿Seguro que desea eliminar esta fecha?, esta acción no puede revertirse.
        <button type="button" class="fuente-monse btn btn-danger align-derecha">Borrar</button>
      </div>
    </div><!--Fin modal-dialog-->
  </div><!-- Termina modal -->
    

  </body>
</html>