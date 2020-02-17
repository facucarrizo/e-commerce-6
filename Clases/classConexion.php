<?php

class Conexion
{

public static function conectar(){
      try {
        $conexion= new PDO("mysql:dbname=ecommerce;host:localhost", "root","root");
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (\Excepcion $e) {
        "hubo un error en la conexion a la base de datos";
    }
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $conexion;
} }?>
