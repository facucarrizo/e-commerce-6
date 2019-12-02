<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
  <title>CASBUSAGI - Zapatillas al paso</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="Contacto.php" id="aa" > Contactanos</a>
  <!-- Header -->
  <div class="">

<div class="">

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

      <div class="widgets-wrap float-md-right">
    <div class="widget-header  mr-3">
      <a href="carrito.php" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
      <span class="badge badge-pill badge-danger notify">0</span>
    </div>
    <div class="widget-header icontext">
      <a href="usuario.php" class="mr-3 icon icon-sm rounded-circle border" style="margin-top:3% ;"><i class="fa fa-user"></i></a>
      <div class="text">
        <span style="margin-left:45% ;" class="text-muted">¡Bienvenido!</span>
        <div>

          <nav aria-label="breadcrum">
            <ol class="breadcrum">

                <button type="button" style="color: purple; background-color: white; box-shadow: 0px;outline:none; border: none; padding: 0%; margin: 0%; margin-right:5px ;" class="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background: none; border: none; color: white;">Iniciar Sesion</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Email</label>
                              <input type="text" class="form-control" id="recipient-name" required>
                              <small id="emailHelp" class="form-text text-muted">No compartiremos tu direccion de Email</small>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Contraseña</label>
                              <input type="password" class="form-control" required>
                              <br>
                              <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                                </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </div>
                    </div>
                  </div>|<a href="Formulario Registro.php" style="text-decoration: none; color: purple; margin-left:5px ;"> Registrarse</a>
        </div>
      </div>
    </div>
  </div>


    </div>
  </nav>


</body>
</html>