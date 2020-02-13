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
}