<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  require_once('head.php');
  ?>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pag-productos.css">
  <title>Document</title>
</head>



<body>
 <a href="Contacto.php" id="aa" > Contactanos</a>
  <!-- Header -->
  <div class="">
  <?php require_once"NAV.php" ?>

</div>
</div>
<!--ARTICULO-->

<div class="portada">
    <div class="jumbotron jumbotron-fluid" style="background-color: white; max-heigth: 30%; ">
        <div class="jumbo">
          <img src="img/adidas-logo.jpg" alt="" style="max-width: 50%; max-height: 50%;">
        </div>
      </div>
    </div>

<div id="hoy">

<section id="zapatillas">


     <div id="hola" class="card" style="width: 18rem;">
       <a href="perfilproducto.php"> <img id="hola2" src="img/adidas-1.jpg" class="card-img-top" alt="..."></a>



      <div class="card-body">


          <div id="nomb">
              <h2>Nike Air Max 97</h2>
          </div>

          <div id="dos">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
          <div id="uno">
          <p style="background-color: rgba(3, 3, 3, 0.425)"; class="card-text">$4.500</p>
              <div class="iconitos">
                <i class="fa fa-heart-o"></i>
                <i class="fa fa-shopping-cart"></i>
              </div>
        </div>
        </div>
      </div>


      <div id="hola" class="card" style="width: 18rem;">
            <a href="perfilproducto.php">  <img id="hola2" src="img/adidas-2" class="card-img-top" alt="..."></a>
          <div class="card-body">

            <div id="nomb">
                <h2>Nike Air Max Oketo</h2>
            </div>

            <div id="dos">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>

            <div id="uno">
            <p style="background-color: rgba(3, 3, 3, 0.425)"; class="card-text">$4.500</p>
            <div class="iconitos">
                <i class="fa fa-heart-o"></i>
                <i class="fa fa-shopping-cart"></i>
              </div>

          </div>
          </div>
        </div>

        <div id="hola" class="card" style="width: 18rem;">
                <a href="perfilproducto.php"> <img id="hola2" src="img/adidas-3.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body">

              <div id="nomb">
                  <h2>Nike Sportswear</h2>
              </div>

              <div id="dos">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
              </div>
              <div id="uno">
              <p style="background-color: rgba(3, 3, 3, 0.425)"; class="card-text">$4.500</p>
              <div class="iconitos">
                  <i class="fa fa-heart-o"></i>
                  <i class="fa fa-shopping-cart"></i>
                </div>
            </div>
            </div>
          </div>


</section>
</div>


<!-- FOOTER: EMPIEZA -->
<?php require_once 'footer.php';  ?>
<!-- FOOTER: TERMINA -->

</div>



 

</body>
</htmls>
