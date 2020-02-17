<?php
include("classConexion.php");
include("ClassUsuario.php");

class UsuarioControlador
{
  
  public function registrar($nombre,$apellido,$pais ,$nacimiento,$email,$alias,$ciudad,$calle,$telefono,$password,$barrio,$postal )
  {

      $obj_usuario = new Persona();
      $obj_usuario->setNombre($nombre);
      $obj_usuario->setApellido($apellido);
      $obj_usuario->setPais($pais);
      $obj_usuario->setNacimiento($nacimiento);
      $obj_usuario->setEmail($email);
      $obj_usuario->setAlias($alias);
      $obj_usuario->setCiudad($ciudad);
      $obj_usuario->setCalle($calle);
      $obj_usuario->setTelefono($telefono);
      $obj_usuario->setPassword($password);
      $obj_usuario->setBarrio($barrio);
      $obj_usuario->setPostal($postal);
      //$obj_usuario->setAvatar($avatar);
      //$obj_usuario->setFechaRegistro($fechaRegistro);


      return Usuario::registrar($obj_usuario);
  }
  public static function login($email, $password)
  {
      $obj_usuario = new Persona();
      $obj_usuario->setEmail($email);
      $obj_usuario->setPassword($password);

      return Usuario::login($obj_usuario);
  }
  public function getUsuario($usuario, $password)
  {
      $obj_usuario = new Persona();
      $obj_usuario->setUsuario($usuario);
      $obj_usuario->setPassword($password);

      return UsuarioDao::getUsuario($obj_usuario);
  }
  public function validarRegistro(){
    $errores= [];
    if ($_POST) {


        /* Validacion nombre */
        if (isset($_POST['nombre'])) {
            if (empty($_POST['nombre'])) {
                $errores['nombre'] = "Este campo es obligatorio";
            } elseif (strlen($_POST['nombre']) < 3) {
                $errores['nombre'] = "El nombre de usuario debe tener al menos 3 caracteres";
            }
        }



        /* Validacion apellido */
        if (isset($_POST["apellido"])) {
            if (empty($_POST["apellido"])) {
                $errores["apellido"] = "* El campo no debe estar vacio";
            } elseif (strlen($_POST["apellido"]) <= 2) {
                $errores["apellido"] = "Debe tener mas de dos caracteres";
            }
        }



        /* Barrio */
        if (isset($_POST["barrio"])) {
            if (empty($_POST["barrio"])) {
                $errores["barrio"] = "* Este campo no debe estar vacio";
            } elseif (strlen($_POST["barrio"]) <= 4) {
                $errores["barrio"] = "Debe tener mas de cuatro caracteres";
            }
        }

        /* codigo postal */
        if (isset($_POST["postal"])) {
            if (empty($_POST["postal"])) {
                $errores["postal"] = "* Este campo no debe estar vacio";
            }
        }

        /* fecha nacimiento  */
        if (isset($_POST["nacimiento"])) {
            if (empty($_POST["nacimiento"])) {
                $errores["nacimiento"] = "* Este campo no debe estar vacio";
            }
        }

        if (isset($_POST['alias'])) {
            if (empty($_POST['alias'])) {
                $errores['alias'] = "Este campo es obligatorio";
            } elseif (strlen($_POST['alias']) < 3) {
                $errores['alias'] = "El alias de usuario debe tener al menos 3 caracteres";
            }
        }

        if (isset($_POST['calle'])) {
            if (empty($_POST['calle'])) {
                $errores['calle'] = "Este campo es obligatorio";
            } elseif (strlen($_POST['calle']) < 8)  {
                $errores['calle'] = "Debe completar los datos correctamente";
            }
        }


        if (isset($_POST['telefono'])) {
            if (empty($_POST['telefono'])) {
                $errores['telefono'] = "Este campo es obligatorio";
            } if (strlen($_POST['telefono']) < 10)  {
                $errores['telefono'] = "Debe tener al menos 10 caracteres incluyendo número de área sin 0 y sin 15, por ej: 1198765432";
            }
        }

        /* Validacion ciudad */
        if (isset($_POST["ciudad"])) {
            if (empty($_POST["ciudad"])) {
                $errores["ciudad"] = "* Este campo no debe estar vacio";
            } elseif (strlen($_POST["ciudad"]) <= 4) {
                $errores["ciudad"] = "Debe tener mas de cuatro caracteres";
            }
        }

        /* Validaciòn Mail */
        if (isset($_POST["email"])) {
            if (empty($_POST["email"])) {
                $errores["email"] =  "hey, este campo no puede estar vacìo";
            }
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "Debes ingresar un mail valido";
        }



        /* Validaciòn Password */
        if (isset($_POST['password'])) {
            if (empty($_POST['password'])) {
                $errores['password'] = "Este campo debe ser completado";
            } elseif (strlen($_POST['password']) < 8) {
                $errores['password'] = "Debe contener al menos 8 caracteres";
            }
        }

        /* Validaciòn Repassword */
        if (isset($_POST['repassword'])) {
            if (empty($_POST['repassword'])) {
                $errores['repassword'] = "Debes completar este campo";
            }
            if ($_POST['password'] != $_POST["repassword"]) {
                $errores['repassword'] = "La contrdaseña no coincide";
            }
        }

        if (isset($_FILES['avatar'])) {
          $name = $_FILES['avatar']['name'];
          $tmp_name = $_FILES ['avatar']['tmp_name'];
          $error  = $_FILES['avatar']['error'];
          $size = $_FILES['avatar']['size'];
          $type = $_FILES['avatar']['type'];
          $max_size = 1024*1024*1;
          if ($error !=0 ) {
              $errores['img']="error, intente de nuevo";
          }
          elseif ($size > $max_size) {
              $errores['img']= "supera el limite sugerido 1MB";
          }
          elseif ( $type != 'image/jpeg' && $type != 'image/png' && $type != 'image/jpg') {
              $errores['img']= "solo admite jpg, jpeg y png";
          }
        else {
          $ruta = "archivos/" .$name;
          move_uploaded_file($tmp_name, $ruta);

           }

        }
        if ($errores === 0){
            header("location:pag registro.php");
        }
        else {
            return $errores;
        }
  }

 }



 function persistirDato($arrayE, $campo)
 {
     if (isset($arrayE[$campo])) {
         return "";
     } else {
         if (isset($_POST[$campo])) {
             return $_POST[$campo];
         }
     }
 }
} ?>
