<?php


class Conexion
{

    static function conectar(){
        $link = new PDO(
            'mysql:host=localhost;dbname=ecommerce',
            'root',
            'root',
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
        );
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $link;
    }
}

?>
