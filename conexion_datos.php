<?php
require("conector.php");


class Conexion_datos
{

  //Funcion que llama los datos para la tabla de aliados estrategicos
  public static function aliados_funcion(){
    $cone=new conexion_bd();
    $cone->Conectar();

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
          <button type='button' data-toggle='modal' data-target='#edita_aliado'
            class='btn btn-info bordes-boton btn-sm my-0 waves-effect waves-light'>
            Editar
          </button> 
          <button type='button' ".$colum_aliado['idaliados_estrategicos']."' data-toggle='modal' data-target='#delete_aliado'
          class='btn btn-danger bordes-boton btn-sm my-0 waves-effect waves-light'>
            Elminar
          </button> 
        </td> <!--Fila-->
      </tr>
    </tbody>";
      self::llama_detalles($colum_aliado['idaliados_estrategicos']);
    }   
}

//Funcion que recibe el id de aliado para que se haga la consulta especifica de los detalles de la empresa
public static function llama_detalles($id_aliado)
{  $cone=new conexion_bd();
  $cone->Conectar();

  $consulta_estados="SELECT idaliados_estrategicos,nombre_empresa,contacto_empresa,correo_empresa from aliados_estrategicos WHERE idaliados_estrategicos='".$id_aliado."'";
  $resultado_estados=$cone->ExecuteQuery($consulta_estados) or die ("Error en consulta de aliados estrategicos"); 
  
  while($colum_id=$resultado_estados->fetch_array())
  {
    $id_aliado=$colum_id['idaliados_estrategicos'];
    $nom_empresa=$colum_id['nombre_empresa'];
    $contac_empresa=$colum_id['contacto_empresa'];
    $correo_empresa=$colum_id['correo_empresa'];
      
  }
  self::Switch($id_aliado,$nom_empresa,$contac_empresa,$correo_empresa); 
  
}


//Funcion para llamar el modal de ver detalles
public static function Switch($id_aliado,$id_nombre,$contac_empresa,$correo_empresa)
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
            <div class='card vertical_centro' style='width: 18rem;'>
              <img class='card-img-top' src='img/lorena.png' alt='Logotipo de empresa'> <!--Aquí debe ir el logo-->
              <div class='card-body fuente_monse fuente_especial'>
                <p class='card-text'>
                  Telefono: '".$contac_empresa."'
                </p>
                <p class='card-text'>
                  Contacto: '".$correo_empresa."'
                </p>
              </div>
            </div>
          </div><!--Finaliza modal-loby-->
        </div><!--Finaliza col-md-6-->
      </div> <!--Finaliza row-->
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cerrar</button>
      </div>
    </div>
  </div>
</div>";}


}


?>