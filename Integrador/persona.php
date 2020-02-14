<?php


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


  $usuario =
  $conexion = classConexion::conectar();
  $sql = "INSERT INTO usuarios (nombre,apellido,pais,nacimiento,email,alias,ciudad,calle,telefono,password,barrio,postal,avatar,fechaRegistro)
                  VALUES (NULL, :nombre,:apellido,:pais,:nacimiento,:email,:alias,:ciudad,:calle,:telefono,:password,:barrio,:postal,:avatar,:fechaRegistro)";
  $stmt = $conexion->prepare($sql);
  $stmt->bindValue(":nombre", $usuario->getNombre());
  $stmt->bindValue(":apellido", $usuario->getApellido());
  $stmt->bindValue(":pais", $usuario->getPais());
  $stmt->bindValue(":nacimiento", $usuario->getNacimiento());
  $stmt->bindValue(":email", $usuario->getEmail());
  $stmt->bindValue(":alias", $usuario->getAlias());
  $stmt->bindValue(":ciudad", $usuario->getCiudad());
  $stmt->bindValue(":calle", $usuario->getCalle());
  $stmt->bindValue(":telefono", $usuario->getTelefono());
  $stmt->bindValue(":password", $usuario->getPassword());
  $stmt->bindValue(":barrio", $usuario->getBarrio());
  $stmt->bindValue(":postal", $usuario->getPostal());
  $stmt->bindValue(":avatar", $usuario->getAvatar());
  $stmt->bindValue(":fechaRegistro", $usuario->getFechaRegistro());

  if( $stmt->execute() ){
      $this->setNombre($nombre);
      $this->setApellido($apellido);
      $this->setPais($pais);
      $this->setNacimiento($nacimiento);
      $this->setEmail($email);
      $this->setAlias($alias);
      $this->setCiudad($ciudad);
      $this->setCalle($calle);
      $this->setTelefono($telefono);
      $this->setPassword($password);
      $this->setBarrio($barrio);
      $this->setPostal($postal);
      $this->setAvatar($avatar);
      $this->setFechaRegistro($fechaRegistro);
      $this->setId($conexion->lastInsertId());
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
