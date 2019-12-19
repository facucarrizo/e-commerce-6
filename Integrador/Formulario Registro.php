<?php

require_once "funciones.php";
require_once("arrays.php");
pre($_POST);
pre($_FILES);
$arrayDeErrores= "";
if ($_POST) {
  $arrayDeErrores = validarRegistracion($_POST);
  if (count($arrayDeErrores) === 0) {
    $usuariofinal = [
       "nombre"=> trim($_POST["nombre"]),
      "apellido" => trim($_POST["apellido"]),
      "email" => $_POST["email"],
      "alias"  => $_POST['alias'],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
      "ciudad" => $_POST["ciudad"],
      "barrio" => $_POST["barrio"],
      "postal" => $_POST["postal"],
      "nacimiento" => $_POST["nacimiento"],
      "pais" => $_POST["pais"],
      "calle" => $_POST["calle"],
      "telefono" => $_POST['telefono'],
      "avatar"  => $_FILES['avatar']
    ];

    $jusuario = json_encode($usuariofinal);
    file_put_contents("usuario.json", $jusuario . PHP_EOL, FILE_APPEND);
  }
}
 
$errores= "ok";
if (isset($_POST['avatar'])) { 
  $name = $_FILES['avatar']['name'];
  $tmp_name = $_FILES ['avatar']['tmp_name'];
  $error  = $_FILES['avatar']['error'];
  $size = $_FILES['avatar']['size'];
  $type = $_FILES['avatar']['type'];
  $max_size = 1024*1024*1;

  if ($error !=0 ) {
      $errores="error, intente de nuevo";
  }
  elseif ($size > $max_size) {
      $errores= "supera el limite sugerido 1MB";
  }
  elseif ( $type != 'image/jpeg' && $type != 'image/png') {
      $errores= "solo admite jpg, jpeg y png";
  }
else {
  $ruta = "archivos/" .$name;
  move_uploaded_file($tmp_name, $ruta);
  
   }
 

}



?>

<!DOCTYPE html>
<html lang="es">

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
  <link rel="stylesheet" href="css/style.css">
  <title>Registro</title>
</head>

<body>
  <?php require_once "NAV.php" ?>
  <a href="Contacto.php" id="aa"> Contactanos</a>
  <!-- Header -->

  <?= $errores ?>

  <div id="Todo">

    <form method="post" action="" enctype="multipart/form-data">
      <div id="titulo">Crear Cuenta</div>
      <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="validationDefault01" placeholder="Nombre" value="<?= persistirDato($arrayDeErrores, "nombre"); ?>">
          <small><?= isset($arrayDeErrores["nombre"]) ? $arrayDeErrores["nombre"] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault02">Apellido</label>
          <input type="text" name="apellido" class="form-control" id="validationDefault02" placeholder="Apellido" value="<?= persistirDato($arrayDeErrores, 'apellido'); ?>">
          <small><?= isset($arrayDeErrores["apellido"]) ? $arrayDeErrores["apellido"] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault01">Email</label>
          <input type="email" name="email" class="form-control" id="validationDefault01" placeholder="Email" value="<?= persistirDato($arrayDeErrores, 'email'); ?>">
          <small><?= isset($arrayDeErrores["email"]) ? $arrayDeErrores["email"] : "" ?></small>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Contraseña</label>
          <input type="password" name="password" class="form-control" id="validationDefault01" placeholder="Contraseña" value="<?= persistirDato($arrayDeErrores, 'password'); ?>">
          <small><?= isset($arrayDeErrores["password"]) ? $arrayDeErrores["password"] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefaultUsername">Repetir Contraseña</label>
          <input type="password" name="repassword" class="form-control" id="validationDefaultUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend2" value="<?= persistirDato($arrayDeErrores, 'repassword'); ?>">
          <small><?= isset($arrayDeErrores["repassword"]) ? $arrayDeErrores["repassword"] : "" ?></small>

        </div>
      </div>

      <div class="form-row">
        <!-- <div class="form-row"> -->
        <div class="col-md-2 mb-3">
          <label for="country_id">Pais </label>
          <select name="country_id" id="country_id" class="form-control select2 select2-hidden-accessible" data-select2-id="country_id" tabindex="-1" aria-hidden="true">
            <option selected="selected" value="10" data-select2-id="12">ARGENTINA</option>
            <?php 
            $i=1;
            $e=3;
            foreach ($paises as $nombres) {
            echo "<option value='$i' data-select2-id='$e'>$paises[$i]</option>";
            $i++;
            $e++;
            }
            ?>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="245" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="PHILIPPINES"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault03">Ciudad</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="Ciudad" name="ciudad" value="<?= persistirDato($arrayDeErrores, 'ciudad'); ?>">
          <small><?= isset($arrayDeErrores["ciudad"]) ? $arrayDeErrores["ciudad"] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Barrio</label>
          <input type="text" class="form-control" id="validationDefault04" placeholder="Barrio" name="barrio" value="<?= persistirDato($arrayDeErrores, 'barrio'); ?>">
          <small><?= isset($arrayDeErrores["barrio"]) ? $arrayDeErrores["barrio"] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault05">Codigo Postal</label>
          <input type="number" min="1000" max="9999" class="form-control" id="validationDefault05" placeholder="Codigo Postal" name="postal" value="<?= persistirDato($arrayDeErrores, 'postal'); ?>">
          <small><?= isset($arrayDeErrores["postal"]) ? $arrayDeErrores["postal"] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Calle - Altura</label>
          <input type="text" name="calle" class="form-control" id="validationDefault01" placeholder="calle" value="<?= persistirDato($arrayDeErrores, "calle"); ?>">
          <small><?= isset($arrayDeErrores["calle"]) ? $arrayDeErrores["calle"] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault05">Año de Nacimiento</label>
          <input type="number" min="1950" max="2019" class="form-control" id="validationDefault05" placeholder="2000" name="nacimiento" value="<?= persistirDato($arrayDeErrores, 'nacimiento'); ?>">
          <small><?= isset($arrayDeErrores["nacimiento"]) ? $arrayDeErrores["nacimiento"] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Alias</label>
          <input type="text" name="Alias" class="form-control" id="validationDefault01" placeholder="Alias" value="<?= persistirDato($arrayDeErrores, "alias"); ?>">
          <small><?= isset($arrayDeErrores["alias"]) ? $arrayDeErrores["alias"] : "" ?></small>
        </div> 
        <div class="col-md-3 mb-3">
          <label for="validationDefault01">Teléfono</label>
          <input type="number"  name="telefono" class="form-control" id="validationDefault01" placeholder="Teléfono" value="<?= persistirDato($arrayDeErrores, "telefono"); ?>">
          <small><?= isset($arrayDeErrores["telefono"]) ? $arrayDeErrores["telefono"] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">    
          <label for="avatar">Avatar</label>
          <input type="file" name="avatar" class="" id="avatar" placeholder="" value="<?= persistirDato($arrayDeErrores, "avatar"); ?>">
          <small><?= isset($arrayDeErrores["avatar"]) ? $arrayDeErrores["avatar"]['size'] : "" ?></small>
        </div>
          
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="customSwitch1" require>
          <label class="custom-control-label" for="customSwitch1" require>Tengo más de 18 años</label>
        </div>
        

      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2" required>
            He Leido y acepto Terminos y Condiciones
          </label>
        </div>
        <a href="terminos.html" id="Terminos" style="margin: 1%;">Terminos y Condiciones</a>





      </div>


      <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Revisa la informacion antes de Enviar">
        Enviar
      </button>
  </div>
  </form>
  </div>



  <!-- FOOTER: EMPIEZA -->
  <?php require_once 'footer.php';  ?>
  <!-- FOOTER: TERMINA -->

  </div>





</body>

</html>