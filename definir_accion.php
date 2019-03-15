<?php
require("conector.php");
include("insertar_datos.php");

if(isset($_POST['guardar_datos']))
{
    $numero_convenio=$_POST['numero_convenio'];
    $nombre_empresa=$_POST['nombre_empresa'];
    $telefono_empresa=$_POST['telefono_empresa'];
    $correo_empresa=$_POST['correo_empresa'];
    $url=$_POST['sitio_oficial'];

    if(isset($_POST['foto']))
    {
        $foto=$_POST['foto'];
        Insertar_bd::insertar_logo($foto);
      
        
    }
    else{
        $foto='2.jpg';
    }
    
    Insertar_bd::insertar_datos($numero_convenio,$nombre_empresa,$telefono_empresa,$correo_empresa,$url,$foto);    
    header('Location:aliados.php'); 
}else if(isset($_POST['editar_datos']))
{
    $id_convenio=$_POST['num_aliado'];
    $nuevonom_empresa=$_POST['nuevonom_empresa'];
    $nuevo_url=$_POST['nuevo_url'];
    $nuevo_contac=$_POST['nuevo_contac'];
    $nuevo_email=$_POST['nuevo_email'];

    if(isset($_POST['foto']))
    {
        $foto=$_POST['foto'];
        Insertar_bd::insertar_logo($foto);
      
    }
    else{
        $foto='2.jpg';
    }
    echo $foto;
    Insertar_bd::editar_aliado($id_convenio,$nuevonom_empresa,$nuevo_contac,$nuevo_email,$nuevo_url,$foto);    
    header('Location:aliados.php');
} else if(isset($_POST['eliminar_convenio']))
{
    $num_convenio=$_POST['id_alumnos'];
    //echo $num_convenio;

    Insertar_bd::eliminar_convenio($num_convenio);
    header('Location:aliados.php');
}



?>