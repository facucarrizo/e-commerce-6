  <!-- Header -->
<?php
require_once('funciones.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    </head>
    <body>
    <div >
    <a href="Contacto.php" id="aa" > Contactanos</a>
      <nav class=" navbar navbar-expand-lg navbar-light"
      id="inicio">
      
      <h4 class=" mr-3 text-uppercase font-weight-bold" ><a href="index.php" style="color: black;text-decoration: none;">CASBUSAGI</a> </h4>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul
        class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hombre
          </a>
          <div class="dropdown-menu">
            
            <a class="dropdown-item" href="producto-vans.php">VANS</a>
            <a class="dropdown-item" href="producto.php">NIKE</a>
            <a class="dropdown-item" href="producto-adidas.php">ADIDAS</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">TODAS</a>
          </div>
        </li>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mujer
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="producto-vans.php">VANS</a>
              <a class="dropdown-item" href="producto.php">NIKE</a>
              <a class="dropdown-item" href="producto-adidas.php">ADIDAS</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">TODAS</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Niños
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="producto-vans.php">VANS</a>
                  <a class="dropdown-item" href="producto.php">NIKE</a>
                  <a class="dropdown-item" href="producto-adidas.php">ADIDAS</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">TODAS</a>
                </div>
              </li>
          
          </ul>
            
          
          
          <div style="padding=5%">
              <div class="widgets-wrap float-md-right">
                <div class="widget-header  mr-3">
                  <a href="carrito.php" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                  <span class=" badge-pill badge-danger notify">0</span> 
                </div>
                <!--  ARRANCA LA CONDICION SI ES QUE HAY UNA SESION INICIADA -->
               
               
                <div class="widget-header icontext">
                <nav class="navbar navbar-expand-lg navbar-light ">
                <?php if(!isset($_SESSION['email'])): ?>
                  <p> </p>
                <?php endif; ?>
                <?php if(isset($_SESSION['email'])): ?>
                  <div class="dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="a" data-toggle="dropdown" aria-haspopup="true"  style="text-transform: capitalize;font-size: 20px;" aria-expanded="false">
  Bienvenido <?= datosUsuario("nombre");?>
                </a>
  <div class="dropdown-menu" style="text-shadow: none;"  aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" style="color:black;" href="usuario.php">Mi usuario</a>
    <?php if(isset($_SESSION['email'])): ?>
                  <a class=" dropdown-item" id="sesion2" style="color:black;" href="logout.php" >Cerrar Sesion</a>
                <?php endif; ?>
  </div>
</div>
                  <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido <?= datosUsuario("nombre");?></a>| 
                   <div class="dropdown-menu">
                  <a class="dropdown-item" href="usuario.php">VANS</a>
                  <a class="dropdown-item" href="producto.php">NIKE</a>
                  
                  </div> -->
                <?php endif; ?>
                <!-- <div class="widget-header  mr-3">
                  <a href="usuario.php" class="mr-3 icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                </div>  -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <?php if(!isset($_SESSION['email'])): ?>
                <a class=" mr-2" id="sesion" href="login.php" role="button">Inicio de Sesion</a>
                | <a  class="  mr-2" style="padding-left: 2%;" id="sesion" href="Formulario Registro.php" role="button">Registrarme</a>
                <?php endif; ?>
                 <!-- if(isset($_SESSION['email'])): 
                  <a class=" mr-2" style="padding-left:1em; padding-top:1%; text-decoration: none;" id="sesion2" href="logout.php" role="button">Cerrar Sesion</a>
                 endif;  -->
            </div>
        </div>
    </nav>
              </div>
                </div>
                </div>
                
                
              </div>
             
        </div>
    </body>
    </html>
   

