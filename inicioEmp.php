<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Empresas</title>
    <?php include('links.php');?>

</head>
    <nav class="navbar navbar-light navbar_color">
        <a class="navbar-brand">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <span>Nombre de la empresa</span> <!--Aqui irá el nombre de la empresa-->
        </a>
    </nav>
<body class="body_inicio_empresas">
    <section class="resume-section p-5">
        <div class="row">
          <div class="col">
            <h3>Publicaciones hechas</h3>    
          </div><!--FIN col-->
          <div class="col">
            <button type='button' data-toggle='modal' data-target='#agrega_publicacion'class='btn btn_add_public waves-light'>
              Agregar nueva publicación
            </button>
          </div>
        </div><!--FIN row-->
        <table class="tabla table table-responsive-md table-bordered align-center font-weight-light">
                <thead id="tablas" class="table-public-color-head"><!--inicio de cabecera que contiene columnas-->
                  <tr class="cabecera_table">
                    <td scope="col" class="col-md-3 align-middle">Fechas</td> <!--Columna-->
                    <td scope="col" class="col-md-3 align-middle">Carreras</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Documento</td> <!--Columna-->
                    <td scope="col" class="col-md-2 align-middle">Action</td> <!--Columna-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
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
</body>
</html>