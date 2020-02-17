<?php

 class Ventas {
protected $producto;
protected $cantidad;
protected $subtotal;
protected $total;
protected $fechaDeCompra;
protected $factura;


public function generarFactura($total, $subtotal, $fechaCompra, $cantidad, $producto){
     return $this=>factura =[$total,$subtotal, $fechaCompra, $cantidad, $producto];
}

/**
 * Get the value of factura
 */ 
public function getFactura()
{
return $this->factura;
}

/**
 * Set the value of factura
 *
 * @return  self
 */ 
public function setFactura($factura)
{
$this->factura = $factura;

return $this;
}
}