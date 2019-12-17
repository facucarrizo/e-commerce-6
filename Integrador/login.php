<?php
session_start();

require_once 'funciones.php';
$arrayDeErrores = [];

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    
    if(!$arrayDeErrores) {
        // LOGUEO AL USUARIO
        $arrayUsuarios = abrirJson('usuario.json');
        foreach($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);
            if($_POST['email'] == $userFinal['email']) {
                if(password_verify($_POST['password'], $userFinal['password'])) {
                    // Crearle una sesion
                    $_SESSION['email'] = $userFinal['email'];
                    if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
                        // Unix time
                        setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
                        setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
                    }
                    header('Location: index.php');
                }
            }
        }
 
    }
    else {
        return $arrayDeErrores;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="css/login.css">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once 'NAV.php' ?>
    <main>
        <div id="Todo2">
        <div id="Todo">
    <h1>Iniciar Sesion</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="">
            <small></small>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
            <small><?= isset($arrayDeErrores["password"])? $arrayDeErrores["password"]:"" ?></small>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
                <label class="form-check-label" for="gridCheck">Recordar mi usuario</label>
            </div>
        </div>
        <button type="submit" class="btn btn-danger">Ingresar</button>
    </form>
    <small>
        <a href="Formulario Registro.php" id="nuevo" >Nuevo aqui? Registrate!</a>
    </small>
    </main>
    </div></div>
    
</body>
</html>

                    