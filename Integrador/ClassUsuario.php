<?php
include("ClassPersona.php");

 Class Usuario extends Persona
 {


 // Login
 public static function login($usuario)
 {
     $query = "SELECT * FROM usuarios WHERE email = :email AND pass = :pass";

    $conexion=  Conexion::conectar();

     $resultado = $conexion->prepare($query);

     $resultado->bindValue(":email", $usuario->getemail());
     $resultado->bindValue(":pass", $usuario->getPassword());

     $resultado->execute();

     if ($resultado->rowCount() > 0) {
         $filas = $resultado->fetch();
         if ($filas["email"] == $usuario->getEmail()
             && $filas["pass"] == $usuario->getPassword()) {
             $_SESSION['email'] = $filas['email'];
             $_SESSION['pais'] = $filas ['pais'];
             $_SESSION['alias'] = $filas ['alias'];
             $_SESSION['ciudad'] = $filas ['ciudad'];
             $_SESSION['nacimiento'] = $filas ['nacimiento'];
             $_SESSION['calle'] = $filas ['calle'];
             $_SESSION['telefono'] = $filas ['telefono'];
             $_SESSION['postal'] = $filas ['postal'];
             $_SESSION['fecha_nacimiento'] = $filas ['fecha_nacimiento'];
             $_SESSION['apellido'] = $filas ['apellido'];
             $_SESSION['barrio'] = $filas ['barrio'];
             header("location: index.php");
         }
     }

     return false;
 }

public static function registrar($usuario)
{

  $conexion = Conexion::conectar();
  $sql = "INSERT INTO usuarios (id, nombre, apellido,pais,fecha_nacimiento,email,alias,ciudad,calle,telefono,pass,barrio,postal)
          VALUES (NULL, :nombre,:apellido,:pais,:fecha_nacimiento,:email,:alias,:ciudad,:calle,:telefono,:pass,:barrio,:postal)";
  $stmt = $conexion->prepare($sql);
  $stmt->bindValue(":nombre", $usuario->getNombre());
  $stmt->bindValue(":apellido", $usuario->getApellido());
  $stmt->bindValue(":pais", $usuario->getPais());
  $stmt->bindValue(":fecha_nacimiento", $usuario->getNacimiento());
  $stmt->bindValue(":email", $usuario->getEmail());
  $stmt->bindValue(":alias", $usuario->getAlias());
  $stmt->bindValue(":ciudad", $usuario->getCiudad());
  $stmt->bindValue(":calle", $usuario->getCalle());
  $stmt->bindValue(":telefono", $usuario->getTelefono());
  $stmt->bindValue(":pass", $usuario->getPassword());
  $stmt->bindValue(":barrio", $usuario->getBarrio());
  $stmt->bindValue(":postal", $usuario->getPostal());
  //$stmt->bindValue(":avatar", $usuario->getAvatar());
  $stmt->execute();




// Listar Usuario
/*public static function getUsuario($usuario)
{
    $query = "SELECT (nombre,apellido,pais,nacimiento,email,alias,ciudad,calle,telefono,password,barrio,postal,avatar) FROM usuarios WHERE usuario = :usuario AND password = :password";

    self::getConexion();

    $resultado = self::$cnx->prepare($query);

    $resultado->bindValue(":usuario", $usuario->getUsuario());
    $resultado->bindValue(":password", $usuario->getPassword());

    $resultado->execute();

    $filas = $resultado->fetch();

    $usuario = new Persona();
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






*/ } }
