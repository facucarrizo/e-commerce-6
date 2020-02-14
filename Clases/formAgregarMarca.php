<?php
include("Marca.php");
if($_POST["marcaNombre"]){
Marca::agregarMarca();}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="agregarMarca.php" method="post">
      <label for="marcaNombre"> Marca</label>
  <input type="text" name="marcaNombre" value="">
  <button type="submit" name="button"></button>

    </form>
  </body>
</html>
