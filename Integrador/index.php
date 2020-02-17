<?php
session_start();
require_once('funciones.php');
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="es">
<header>
  <?php
  require_once('head.php');
  ?>
  <title>CASBUSAGI - Zapatillas al paso</title>
</header>

<body>
  <a href="Contacto.html" id="aa"> Contactanos</a>
  <!-- Header -->

  <?php
  require_once("NAV.php"); ?>

  <?php require_once("carousel.php");
  require_once("Tarjetas.php");
  require_once("footer.php");
  ?>

</body>

</html>
