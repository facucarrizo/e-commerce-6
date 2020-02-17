<?php
final class Carrito{
 private $producto;
 private $total;
 
 public function $eliminarProducto();
 public function $comprar();
 

 /**
  * Get the value of producto
  */ 
 public function getProducto()
 {
  return $this->producto;
 }

 /**
  * Set the value of producto
  *
  * @return  self
  */ 
 public function setProducto($producto)
 {
  $this->producto = $producto;

  return $this;
 }

 /**
  * Get the value of total
  */ 
 public function getTotal()
 {
  return $this->total;
 }

 /**
  * Set the value of total
  *
  * @return  self
  */ 
 public function setTotal($total)
 {
  $this->total = $total;

  return $this;
 }
}