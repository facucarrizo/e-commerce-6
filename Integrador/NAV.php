  <!-- Header -->
<?php
require_once('funciones.php');
?>
    
    <div >
      
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
               
                <div class="widget-header  mr-3">
                  <a href="usuario.php" class="mr-3 icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                </div> 
                <div class="widget-header icontext">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <?php if(!isset($_SESSION['email'])): ?>
                  <p> </p>
                <?php endif; ?>
                <?php if(isset($_SESSION['email'])): ?>
                  <a class="navbar-brand" href="#">Bienvenido <?= datosUsuario("nombre");?></a>
                <?php endif; ?>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <?php if(!isset($_SESSION['email'])): ?>
                <a class="btn btn-primary mr-2" href="Formulario Registro.php" role="button">Registro</a>
                <a class="btn btn-secondary mr-2" href="login.php" role="button">Login</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['email'])): ?>
                <a class="btn btn-danger" href="logout.php" role="button">Log out</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
              </div>
                </div>
                </div>
                
                
              </div>
             
        </div>

