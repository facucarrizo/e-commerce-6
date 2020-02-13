<?php

class Usuario
 {
  private $nombre;
  private $apellido;
  private $pais;
  private $nacimiento;
  private $email;
  private $alias;
  private $ciudad;
  private $calle;
  private $telefono;
  private $password;
  private $barrio;
  private $postal;
  private $avatar;
  private $fechaRegistro;
  private $compras;
  private $miCarrito;



 //public function editarCuenta();
// public function eliminarCuenta();
//public function comprar();
// public function calificar();
//public function buscar();
//public function vistaDeWeb();


 /* Getters & Setters */
 /**
  * Get the value of nombre
  */
 public function getNombre()
 {
  return $this->nombre;
 }

 /**
  * Set the value of nombre
  *
  * @return  self
  */
 public function setNombre($nombre)
 {
  $this->nombre = $nombre;

  return $this;
 }

 /**
  * Get the value of apellido
  */
 public function getApellido()
 {
  return $this->apellido;
 }

 /**
  * Set the value of apellido
  *
  * @return  self
  */
 public function setApellido($apellido)
 {
  $this->apellido = $apellido;

  return $this;
 }

 /**
  * Get the value of pais
  */
 public function getPais()
 {
  return $this->pais;
 }

 /**
  * Set the value of pais
  *
  * @return  self
  */
 public function setPais($pais)
 {
  $this->pais = $pais;

  return $this;
 }

 /**
  * Get the value of nacimiento
  */
 public function getNacimiento()
 {
  return $this->nacimiento;
 }

 /**
  * Set the value of nacimiento
  *
  * @return  self
  */
 public function setNacimiento($nacimiento)
 {
  $this->nacimiento = $nacimiento;

  return $this;
 }

 /**
  * Get the value of email
  */
 public function getEmail()
 {
  return $this->email;
 }

 /**
  * Set the value of email
  *
  * @return  self
  */
 public function setEmail($email)
 {
  $this->email = $email;

  return $this;
 }

 /**
  * Get the value of alias
  */
 public function getAlias()
 {
  return $this->alias;
 }

 /**
  * Set the value of alias
  *
  * @return  self
  */
 public function setAlias($alias)
 {
  $this->alias = $alias;

  return $this;
 }

 /**
  * Get the value of ciudad
  */
 public function getCiudad()
 {
  return $this->ciudad;
 }

 /**
  * Set the value of ciudad
  *
  * @return  self
  */
 public function setCiudad($ciudad)
 {
  $this->ciudad = $ciudad;

  return $this;
 }

 /**
  * Get the value of calle
  */
 public function getCalle()
 {
  return $this->calle;
 }

 /**
  * Set the value of calle
  *
  * @return  self
  */
 public function setCalle($calle)
 {
  $this->calle = $calle;

  return $this;
 }

 /**
  * Get the value of telefono
  */
 public function getTelefono()
 {
  return $this->telefono;
 }
 /**
  * Set the value of telefono
  *
  * @return  self
  */
 public function setTelefono($telefono)
 {
  $this->telefono = $telefono;

  return $this;
 }

 /**
  * Get the value of password
  */
 public function getPassword()
 {
  return $this->password;
 }

 /**
  * Set the value of password
  *
  * @return  self
  */
 public function setPassword($password)
 {
  $this->password = $password;

  return $this;
 }

 /**
  * Get the value of barrio
  */
 public function getBarrio()
 {
  return $this->barrio;
 }

 /**
  * Set the value of barrio
  *
  * @return  self
  */
 public function setBarrio($barrio)
 {
  $this->barrio = $barrio;

  return $this;
 }

 /**
  * Get the value of postal
  */
 public function getPostal()
 {
  return $this->postal;
 }

 /**
  * Set the value of postal
  *
  * @return  self
  */
 public function setPostal($postal)
 {
  $this->postal = $postal;

  return $this;
 }

 /**
  * Get the value of avatar
  */
 public function getAvatar()
 {
  return $this->avatar;
 }

 /**
  * Set the value of avatar
  *
  * @return  self
  */
 public function setAvatar($avatar)
 {
  $this->avatar = $avatar;

  return $this;
 }
 /**
  * Get the value of compras
  */
 public function getCompras()
 {
  return $this->compras;
 }

 /**
  * Set the value of compras
  *
  * @return  self
  */
 public function setCompras($compras)
 {
  $this->compras = $compras;

  return $this;
 }

 /**
  * Get the value of miCarrito
  */
 public function getMiCarrito()
 {
  return $this->miCarrito;
 }

 /**
  * Set the value of miCarrito
  *
  * @return  self
  */
 public function setMiCarrito($miCarrito)
 {
  $this->miCarrito = $miCarrito;

  return $this;
 }



  /**
   * Get the value of fechaRegistro
   */
  public function getFechaRegistro()
  {
    return $this->fechaRegistro;
  }

  /**
   * Set the value of fechaRegistro
   *
   * @return  self
   */
  public function setFechaRegistro($fechaRegistro)
  {
    $this->fechaRegistro = $fechaRegistro;

    return $this;
  }
}
