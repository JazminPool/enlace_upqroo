<?php
require("conector.php");


class Conexion_datos
{

  //Funcion que llama los datos para la tabla de aliados estrategicos
  public static function aliados_funcion(){
    $cone=new conexion_bd();
    $cone->Conectar();
    $editar='editar_aliado';
    $eliminar='delete_aliado';
    $consulta_estados="SELECT * from aliados_estrategicos";
    $resultado_estados=$cone->ExecuteQuery($consulta_estados) or die ("Error en consulta de aliados estrategicos");     
  
    while($colum_aliado=$resultado_estados->fetch_array())
    {     
      echo"<tbody>
      <tr>
        <td scope='row' class='align-middle' name='num_convenio'>'".$colum_aliado['idaliados_estrategicos']."'</td> <!--Fila-->
        <td class='align-middle' name='nombre empresa'>'".$colum_aliado['nombre_empresa']."'</td> <!--Fila-->
        <td class='align-middle'>
          <a target='_blank' class='btn btn-aliados bordes-boton btn-sm my-0 waves-effect waves-light' id='btn' href='https://".$colum_aliado['pagoficial_empresa']."'>
            Visitar
          </a>
        </td> <!--Fila-->
        <td class='align-middle'>
          <button type='button' data-toggle='modal' data-target='#".$colum_aliado['idaliados_estrategicos']."'
           class='btn btn-aliados-detalles bordes-boton btn-sm my-0 waves-effect waves-light'>
            Ver detalles
          </button> 
        </td> <!--Fila-->
        <td class='align-middle'>
          <button type='button' data-toggle='modal' data-target='#".$editar.$colum_aliado['idaliados_estrategicos']."'
            class='btn btn-info bordes-boton btn-sm my-0 waves-effect waves-light'>
            Editar
          </button> 
          <button type='button' data-toggle='modal' data-target='#".$eliminar.$colum_aliado['idaliados_estrategicos']."'
          class='btn btn-danger bordes-boton btn-sm my-0 waves-effect waves-light'>
            Elminar
          </button> 
        </td> <!--Fila-->
      </tr>
    </tbody>";
      self::llama_detalles($colum_aliado['idaliados_estrategicos'],$editar,$eliminar);
    }   
}



//Funcion que recibe el id de aliado para que se haga la consulta especifica de los detalles de la empresa
public static function llama_detalles($id_aliado,$editar,$eliminar)
{  $cone=new conexion_bd();
  $cone->Conectar();

  $consulta_estados="SELECT * from aliados_estrategicos INNER JOIN archivos ON aliados_estrategicos.archivos_idarchivos=archivos.idarchivos WHERE idaliados_estrategicos='".$id_aliado."'";
  $resultado_estados=$cone->ExecuteQuery($consulta_estados) or die ("Error en consulta de aliados estrategicos"); 
  
  while($colum_id=$resultado_estados->fetch_array())
  {
    $id_aliado=$colum_id['idaliados_estrategicos'];
    $nom_empresa=$colum_id['nombre_empresa'];
    $contac_empresa=$colum_id['contacto_empresa'];
    $correo_empresa=$colum_id['correo_empresa'];
    $url=$colum_id['pagoficial_empresa'];
    $foto=$colum_id['archivo_adjunto'];
    self::Switch($id_aliado,$nom_empresa,$contac_empresa,$correo_empresa,$foto); 
    self::edita_aliado($id_aliado,$nom_empresa,$contac_empresa,$correo_empresa,$editar,$url,$foto);
    self::elimina_aliado($id_aliado,$eliminar);
      
  }

}


//Funcion para llamar el modal de ver detalles
public static function Switch($id_aliado,$id_nombre,$contac_empresa,$correo_empresa,$foto)
{  echo "
  <div class='modal fade' id='".$id_aliado."' tabindex='-1' role='dialog' aria-labelledby='modal_detalles_afiliadosLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>$id_nombre</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div><!--Finaliza modal-header-->
      <div class='row justify-content-md-center'>   
        <div class='col-lg-8'>    
          <div class='modal-body'>
            <div class='vertical_centro' style='width: 18rem;'>
              <img class='card-img-top' src='archivos/logos/".$foto."' alt='Logotipo de empresa'> <!--Aquí debe ir el logo-->
              <div class='card-body fuente_monse fuente_especial'>
                <p class='card-text'>
                  Telefono: '".$contac_empresa."'
                </p>
                <p class='card-text'>
                  Contacto: '".$correo_empresa."'
                </p>
              </div><!--Fin de card-body-->
            </div><!--Finaliza el vertical_centro-->
          </div><!--Finaliza modal-loby-->
        </div><!--Finaliza col-md-6-->
      </div> <!--Finaliza row-->
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cerrar</button>
      </div>
    </div>
  </div>
</div>";}

//FUNCION PARA EDITAR A LOS ALIADOS
public static function edita_aliado($id_aliado,$nom_empresa,$contac_empresa,$correo_empresa,$editar,$url,$foto)
{
 echo "
 <form method='POST' action='definir_accion.php' enctype='multipart/form-data'>
  <div class='modal fade' id='".$editar.$id_aliado."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header modal-header-color-edit'>
          <h5 class='modal-title modal-title-edit'>Editar</h5>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>
        <div class='modal-body'>
          <div class='row col-centrada'>
            <div class='col'>
              <label>Numero de convenio</label>
            </div>
            <div class='col'>
              <input type='text' class='form-control fuente_monse' name='num_aliado' value='$id_aliado' readonly>
            </div>
          </div>
          <br>
          <div class='row col-centrada'>
            <div class='col'>
              <label>Nombre de la empresa</label>
            </div>
            <div class='col'>
              <input type='text' class='form-control fuente_monse' name='nuevonom_empresa' value='$nom_empresa' required>
            </div>
          </div>
          <br>
          <div class='row col-centrada'>
            <div class='col'>
              <label>URL del Sitio Oficial</label>
            </div>
            <div class='col'>
              <input type='text' class='form-control fuente_monse' name='nuevo_url' value='$url' required>
            </div>
          </div>
          <br>
          <div class='row col-centrada'>
            <div class='col'>
              <label>Telefono de la empresa</label>
            </div>
            <div class='col'>
              <input type='text' class='form-control fuente_monse' name='nuevo_contac' value='$contac_empresa' required>
            </div>
          </div>
          <br>
          <div class='row col-centrada'>
            <div class='col'>
              <label>Correo de la empresa</label>
            </div>
            <div class='col'>
              <input type='email' class='form-control fuente_monse' name='nuevo_email' value='$correo_empresa' required>
            </div>
          </div>
          <br>
          <center>
            <div class='row col-centrada'>
              <div class='col'>
                <label>Seleccionar logotipo</label>
              </div>
            </div>
            <div class='row col-centrada'>  
              <div class='col'>
                <div class='form-group'>
                  <input type='file' name='foto' class='form-control-file'>
                </div>
              </div>
            </div>
            <button type='submit' class='fuente-monse btn btn-info align-derecha' name='editar_datos'>Guardar</button>
          </center>
        </div>
      </div>
    </div>
  </div>
</form>";

}

public static function elimina_aliado($id_aliado,$eliminar)
{
  echo "
  <form method=POST action='definir_accion.php'>
  <div class='modal fade bd-example-modal-sm' id='".$eliminar.$id_aliado."' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>
    <input type='hidden' name='id_alumnos' value='$id_aliado'>
      ¿Seguro que desea eliminar aliado ".$id_aliado." ?, esta acción no puede revertirse.
      <button type='submit' name='eliminar_convenio' class='fuente-monse btn btn-danger align-derecha'>Borrar</button>
    </div>
  </div>
</div>
</form>";

}

////////////////////////////////////////////////CONVOCATORIAS///////////////////////////////////////////////////////////////7

public static function mostrar_convocatoria()
{
  $cone=new conexion_bd();
  $cone->Conectar();
  $editar_convocatoria='edita_convocatoria';
  $eliminar_convocatoria='delete_convocatoria';
  $consulta_fechas="SELECT * from fechas_est inner join tipos_est ON fechas_est.tipos_idtipos=tipos_est.idtipos_est inner join
  carreras ON fechas_est.carreras_idcarreras=carreras.idcarreras";
  $resultado_fechas=$cone->ExecuteQuery($consulta_fechas) or die ("Error en consulta de fechas");  

  while($colum_fecha=$resultado_fechas->fetch_array())
  {
  echo"
  <tbody>
  <tr>
    <td scope='row' class='align-middle'>
      ".$colum_fecha['descripcion_est']."
    </td> 
    <td class='align-middle'>
    ".$colum_fecha['fecha_conv']."
    </td> 
    <td class='align-middle'>
    ".$colum_fecha['descripcion_carrera']."
    </td> 
    <td class='align-middle'>".$colum_fecha['nombre_doc']."</td> 
    <td class='align-middle'>

      <button type='button' data-toggle='modal' data-target='#".$eliminar_convocatoria.$colum_fecha['idfechas_est']."' class='btn btn-danger bordes-boton btn-sm my-0 waves-effect waves-light'>
        Eliminar
      </button>
    </td> 
    </td> 
  </tr>
</tbody>";
    self::detalles_convocatoria($colum_fecha['idfechas_est'],$editar_convocatoria,$eliminar_convocatoria);
  }
}

public static function detalles_convocatoria($id_aliado, $editar_convocatoria,$eliminar_convocatoria)
{
  $cone=new conexion_bd();
  $cone->Conectar();

  $detalles_convocatorio="SELECT *  from fechas_est inner join tipos_est ON fechas_est.tipos_idtipos=tipos_est.idtipos_est inner join
  carreras ON fechas_est.carreras_idcarreras=carreras.idcarreras WHERE idfechas_est='".$id_aliado."'";
  $res_convo=$cone->ExecuteQuery($detalles_convocatorio) or die ("Error al llamar detalles");

  while($colum_detalles=$res_convo->fetch_array())
  {
    $id_fecha=$colum_detalles['idfechas_est'];
    $id_carrera=$colum_detalles['idcarreras'];
    $descripcion_carrera=$colum_detalles['descripcion_carrera'];
    $descripcion_estadia=$colum_detalles['descripcion_est']; 
    $id_tipo=$colum_detalles['idtipos_est'];
   
  }


}

public static function eliminar_convocatoria()
{
  echo "
  <form method='POST' action='definir_accion'>
  <div class='modal fade bd-example-modal-sm' id='delete_convocatoria' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>
      ¿Seguro que desea eliminar esta fecha?, esta acción no puede revertirse.
      <button type='submit' name='eliminar_convocatoria' class='fuente-monse btn btn-danger align-derecha'>Borrar</button>
    </div>
  </div>
</div>
</form>
";
}



}

?>