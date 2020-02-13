<?php
include 'classConexion.php';
include 'ClassUsuario.php';
 class Persona extends Conexion
 {

 protected static $cnx;

 private static function getConexion()
 {
     self::$cnx = Conexion::conectar();
 }

 private static function desconectar()
 {
     self::$cnx = null;
 }
 // Login
 public static function login($usuario)
 {
     $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";

     self::getConexion();

     $resultado = self::$cnx->prepare($query);

     $resultado->bindValue(":usuario", $usuario->getUsuario());
     $resultado->bindValue(":password", $usuario->getPassword());

     $resultado->execute();

     if ($resultado->rowCount() > 0) {
         $filas = $resultado->fetch();
         if ($filas["usuario"] == $usuario->getUsuario()
             && $filas["password"] == $usuario->getPassword()) {
             return true;
         }
     }

     return false;
 }

public static function registrar($usuario)
{
    $query = "INSERT INTO usuarios (nombre,apellido,pais,nacimiento,email,alias,ciudad,calle,telefono,password,barrio,postal,avatar,fechaRegistro) VALUES (:nombre,:apellido,:pais,:nacimiento,:email,:alias,:ciudad,:calle,:telefono,:password,:barrio,:postal,:avatar,:fechaRegistro)";

    self::getConexion();

    $resultado = self::$cnx->prepare($query);

    $resultado->bindValue(":nombre", $usuario->getNombre());
    $resultado->bindValue(":apellido", $usuario->getApellido());
    $resultado->bindValue(":pais", $usuario->getPais());
    $resultado->bindValue(":nacimiento", $usuario->getNacimiento());
    $resultado->bindValue(":email", $usuario->getEmail());
    $resultado->bindValue(":alias", $usuario->getAlias());
    $resultado->bindValue(":ciudad", $usuario->getCiudad());
    $resultado->bindValue(":calle", $usuario->getCalle());
    $resultado->bindValue(":telefono", $usuario->getTelefono());
    $resultado->bindValue(":password", $usuario->getPassword());
    $resultado->bindValue(":barrio", $usuario->getBarrio());
    $resultado->bindValue(":postal", $usuario->getPostal());
    $resultado->bindValue(":avatar", $usuario->getAvatar());
    $resultado->bindValue(":fechaRegistro", $usuario->getFechaRegistro());

    if ($resultado->execute()) {
        return true;
    }

    return false;
}



// Listar Usuario
public static function getUsuario($usuario)
{
    $query = "SELECT (nombre,apellido,pais,nacimiento,email,alias,ciudad,calle,telefono,password,barrio,postal,avatar) FROM usuarios WHERE usuario = :usuario AND password = :password";

    self::getConexion();

    $resultado = self::$cnx->prepare($query);

    $resultado->bindValue(":usuario", $usuario->getUsuario());
    $resultado->bindValue(":password", $usuario->getPassword());

    $resultado->execute();

    $filas = $resultado->fetch();

    $usuario = new Usuario();
    $usuario->setNombre($filas["nombre"]);
    $usuario->setApellido($filas["apellido"]);
    $usuario->setPais($filas["pais"]);
    $usuario->setNacimiento($filas["nacimiento"]);
    $usuario->setEmail($filas["email"]);
    $usuario->setAlias($filas["alias"]);
    $usuario->setCiudad($filas["ciudad"]);
    $usuario->setCalle($filas["calle"]);
    $usuario->setTelefono($filas["telefono"]);
    $usuario->setPassword($filas["password"]);
    $usuario->setBarrio($filas["barrio"]);
    $usuario->setPostal($filas["postal"]);
    $usuario->setAvatar($filas["avatar"]);
    $usuario->setFechaRegistro($filas["fecha_registro"]);

    return $usuario;
}






 }
