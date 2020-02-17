<?php

//require_once "funciones.php";
require_once("arrays.php");
require_once("UsuarioControlador.php");

$errores = usuarioControlador::validarRegistro();

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



  <div id="Todo">

    <form method="post" <?php if($errores == 0):?> action="pag registro.php" <?php endif; ?> enctype="multipart/form-data">
      <div id="titulo">Crear Cuenta</div>
      <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="validationDefault01" placeholder="Nombre" value="<?= usuarioControlador::persistirDato($errores, "nombre"); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['nombre']) ? usuarioControlador::validarRegistro()['nombre'] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault02">Apellido</label>
          <input type="text" name="apellido" class="form-control" id="validationDefault02" placeholder="Apellido" value="<?= usuarioControlador::persistirDato($errores, 'apellido'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['apellido']) ? usuarioControlador::validarRegistro()['apellido'] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault01">Email</label>
          <input type="email" name="email" class="form-control" id="validationDefault01" placeholder="Email" value="<?= usuarioControlador::persistirDato($errores, 'email'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['email']) ? usuarioControlador::validarRegistro()['email'] : "" ?></small>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Contraseña</label>
          <input type="password" name="password" class="form-control" id="validationDefault01" placeholder="Contraseña" value="<?= usuarioControlador::persistirDato($errores, 'password'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['password']) ? usuarioControlador::validarRegistro()['password'] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefaultUsername">Repetir Contraseña</label>
          <input type="password" name="repassword" class="form-control" id="validationDefaultUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend2" value="<?= usuarioControlador::persistirDato($errores, 'repassword'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['repassword']) ? usuarioControlador::validarRegistro()['repassword'] : "" ?></small>

        </div>
      </div>

      <div class="form-row">
        <!-- <div class="form-row"> -->
        <div class="col-md-2 mb-3">
          <label for="pais">Pais </label>
          <select name="pais" id="country_id" class="form-control select2 select2-hidden-accessible" data-select2-id="country_id" tabindex="-1" aria-hidden="true">
            <option selected="selected" value="ARGENTINA" data-select2-id="12">ARGENTINA</option>
            <?php

            $e=3;
            foreach ($paises as $nombres) {
            echo "<option value='$nombres' data-select2-id='$e'>$nombres</option>";
            $e++;
            }
            ?>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="245" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="PHILIPPINES"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault03">Ciudad</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="Ciudad" name="ciudad" value="<?= usuarioControlador::persistirDato($errores, 'ciudad'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['ciudad']) ? usuarioControlador::validarRegistro()['ciudad'] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Barrio</label>
          <input type="text" class="form-control" id="validationDefault04" placeholder="Barrio" name="barrio" value="<?= persistirDato($errores, 'barrio'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['barrio']) ? usuarioControlador::validarRegistro()['barrio'] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault05">Codigo Postal</label>
          <input type="number" min="1000" max="9999" class="form-control" id="validationDefault05" placeholder="Codigo Postal" name="postal" value="<?= usuarioControlador::persistirDato($errores, 'postal'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['postal']) ? usuarioControlador::validarRegistro()['postal'] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Calle - Altura</label>
          <input type="text" name="calle" class="form-control" id="validationDefault01" placeholder="calle" value="<?= usuarioControlador::persistirDato($errores, "calle"); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['calle']) ? usuarioControlador::validarRegistro()['calle'] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault05">Año de Nacimiento</label>
          <input type="number" min="1950" max="2019" class="form-control" id="validationDefault05" placeholder="2000" name="nacimiento" value="<?= usuarioControlador::persistirDato($errores, 'nacimiento'); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['nacimiento']) ? usuarioControlador::validarRegistro()['nacimiento'] : "" ?></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Alias</label>
          <input type="text" name="alias" class="form-control" id="validationDefault01" placeholder="Alias" value="<?= usuarioControlador::persistirDato($errores, "alias"); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['alias']) ? usuarioControlador::validarRegistro()['alias'] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault01">Teléfono</label>
          <input type="number"  name="telefono" class="form-control" id="validationDefault01" placeholder="Teléfono" value="<?= usuarioControlador::persistirDato($errores, "telefono"); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['telefono']) ? usuarioControlador::validarRegistro()['telefono'] : "" ?></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="avatar">Avatar</label>
          <input type="file" name="avatar" class="" id="avatar" placeholder="" value="<?= usuarioControlador::persistirDato($errores, "avatar"); ?>">
          <small><?= isset(usuarioControlador::validarRegistro()['img']) ? usuarioControlador::validarRegistro()['img'] : "" ?></small>
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
