<?php
require_once("UsuarioControlador.php");
require_once("ClassPersona.php");
$objUser = UsuarioControlador::registrar($_POST['nombre'], $_POST['apellido'], $_POST['pais'],$_POST['nacimiento'], $_POST['email'],$_POST['alias'],$_POST['ciudad'], $_POST['calle'],$_POST['telefono'],$_POST['password'], $_POST['barrio'], $_POST['postal']);




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Formuario Registro.css">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/pag registro.css">

    <title>Document</title>
</head>
<body>
<?php require_once"NAV.php" ?>
<div class="mx-5">
<div class="jumbotron" style=" background-color:rgba(0, 0, 0, 0.795);" >
  <h1 class="display-4">Cuenta creada exitosamente</h1>
  <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
  <hr class="my-4">
  <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  <main class="container">
<?php
        $mensaje = 'No pudo registrar el Usuario';
        $clase = 'danger';
        if( isset($objUser) ){
            $mensaje = 'nombre: '.$objUser->getNombre();
            $mensaje .= ' agregada corectamente';
            $clase = 'success';
        }
?>
    <div class="alert alert-<?= $clase ?>">
        <?= $mensaje; ?>
    </div>
</main>
  <a class="btn btn-danger lg" id="Boton" href="usuario.php" role="button">Mi Usuario</a>
  <br><br>
  <a class="btn btn-danger lg" id="Boton" href="index.php" role="button">Explorar</a>
</div></div>
</body>
</html>
