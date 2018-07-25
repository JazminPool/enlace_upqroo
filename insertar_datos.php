<?php
include_once("conector.php");

class Insertar_bd{
    public static function insertar_logo($foto)
    {
        $cone=new conexion_bd();
        $cone->Conectar();
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="archivos/logos/".$foto."";
        $insertar_logo="INSERT INTO archivos ('idarchivos', 'carpeta_uno', 'carpeta_dos', 'archivo_adjunto') 
        VALUES ('','archivos','logos','$foto')";
        $resultado_logo=$cone->ExecuteQuery($insertar_logo) or die ("Insertar logo no funciono");
    }

    public static function insertar_datos($id_aliado,$nombre_empresa,$contacto_empresa,$correo_empresa,$pagoficial_empresa,$foto){

        $cone=new conexion_bd();
        $cone->Conectar();
        $llamar_foto="SELECT idarchivos from archivos WHERE archivo_adjunto='".$foto."'";
        $resultado_foto=$cone->ExecuteQuery($llamar_foto) or die ("Error al traer imagen");

        while($colum_foto=$resultado_foto->fetch_array())
        {
            $id_foto=$colum_foto['idarchivos'];
        }
        
        $insertar_nuevo="INSERT INTO `aliados_estrategicos` (`idaliados_estrategicos`, `nombre_empresa`, 
        `contacto_empresa`, `correo_empresa`, `pagoficial_empresa`, `archivos_idarchivos`) 
        VALUES ('".$id_aliado."', '".$nombre_empresa."', '".$contacto_empresa."', '".$correo_empresa."', '".$pagoficial_empresa."', '".$id_foto."')";
        $resultado_nuevo=$cone->ExecuteQuery($insertar_nuevo) or die ("nel");

    }

    public static function eliminar_convenio($id_aliado)
    {
        $cone=new conexion_bd();
        $cone->Conectar();
        $eliminar_convenio="DELETE FROM aliados_estrategicos WHERE idaliados_estrategicos='$id_aliado'";
        $resultado_eliminar=$cone->ExecuteQuery($eliminar_convenio) or die ("Eliminar no funciono");
    }

    public static function editar_aliado($id_aliado,$nombre_empresa,$contacto_empresa,$correo_empresa,$pagoficial_empresa,$foto)
    {
        $cone=new conexion_bd();
        $cone->Conectar();

        $editar_foto="SELECT idarchivos from archivos WHERE archivo_adjunto='".$foto."'";
        $resultado_foto=$cone->ExecuteQuery($editar_foto) or die ("Error al traer imagen");

        while($colum_foto=$resultado_foto->fetch_array())
        {
            $id_foto=$colum_foto['idarchivos'];
        }

        $editar_aliado="UPDATE aliados_estrategicos SET nombre_empresa='$nombre_empresa',
        contacto_empresa='$contacto_empresa',
        correo_empresa='$correo_empresa',pagoficial_empresa='$pagoficial_empresa',archivos_idarchivos='$id_foto' 
        WHERE idaliados_estrategicos='$id_aliado'";
        $resultado_editar=$cone->ExecuteQuery($editar_aliado) or die ("Error al editar");


    }




}




?>