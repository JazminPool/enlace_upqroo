<?php

class Insertar_bd{


    public static function insertar_logo($foto)
    {
        $cone=new conexion_bd();
        $cone->Conectar();
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="archivos/logos/".$foto;
        $insertar_logo="INSERT INTO archivos ('idarchivos', 'carpeta_uno', 'carpeta_dos', 'archivo_adjunto') 
        VALUES ('','archivos','logos','$foto')";
    }
    public static function insertar_datos(){

        $cone=new conexion_bd();
        $cone->Conectar();

        $insertar_nuevo="INSERT INTO aliados_estrategicos (idaliados_estrategicos', 'nombre_empresa', 
        'contacto_empresa','extension_empresa', 'correo_empresa', 'pagoficial_empresa', 'archivos_idarchivos') ";

    }




}




?>