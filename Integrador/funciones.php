<?php

/* Para hacer un var_dump copado */
function pre($vardamp)
{
    echo "<pre>";
    var_dump($vardamp);
    echo "</pre>";
}



function abrirJson($unArvhivo)
{
    $usuariosGuardados = file_get_contents($unArvhivo);
    $explodeDeUsuarios = explode(PHP_EOL, $usuariosGuardados);
    array_pop($explodeDeUsuarios);
    return $explodeDeUsuarios;
}


function datosUsuario($dato)
{
    $arrayUsuarios = abrirJson('usuario.json');
    foreach ($arrayUsuarios as $usuarioJson)
        $userFinal = json_decode($usuarioJson, true);
    return $userFinal[$dato];
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


/* function ValidarArchivo() {
    if ($_FILES) {
        if($_FILES['errores'] != 0) {
            echo "Hay un error al cargar el archivo, por favor vuelva a intentarlo"; 
        }
     if ()
    }
}
 */








/* Validar formulario de registro */

function validarRegistracion($arrayGP)
{
    /* array de errores */
    $errores = [];
    if ($arrayGP) {




        
       



        /* Validacion nombre */
        if (isset($arrayGP['nombre'])) {
            if (empty($arrayGP['nombre'])) {
                $errores['nombre'] = "Este campo es obligatorio";
            } elseif (strlen($arrayGP['nombre']) < 3) {
                $errores['nombre'] = "El nombre de usuario debe tener al menos 3 caracteres";
            }
        }



        /* Validacion apellido */
        if (isset($arrayGP["apellido"])) {
            if (empty($arrayGP["apellido"])) {
                $errores["apellido"] = "* Este campo no debe estar vacio";
            } elseif (strlen($arrayGP["apellido"]) <= 2) {
                $errores["apellido"] = "Debe tener mas de dos caracteres";
            }
        }



        /* Barrio */
        if (isset($arrayGP["barrio"])) {
            if (empty($arrayGP["barrio"])) {
                $errores["barrio"] = "* Este campo no debe estar vacio";
            } elseif (strlen($arrayGP["barrio"]) <= 4) {
                $errores["barrio"] = "Debe tener mas de cuatro caracteres";
            }
        }

        /* codigo postal */
        if (isset($arrayGP["postal"])) {
            if (empty($arrayGP["postal"])) {
                $errores["postal"] = "* Este campo no debe estar vacio";
            }
        }

        /* fecha nacimiento  */
        if (isset($arrayGP["nacimiento"])) {
            if (empty($arrayGP["nacimiento"])) {
                $errores["nacimiento"] = "* Este campo no debe estar vacio";
            }
        }

        if (isset($arrayGP['alias'])) {
            if (empty($arrayGP['alias'])) {
                $errores['alias'] = "Este campo es obligatorio";
            } elseif (strlen($arrayGP['alias']) < 3) {
                $errores['alias'] = "El alias de usuario debe tener al menos 3 caracteres";
            }
        }

        if (isset($arrayGP['calle'])) {
            if (empty($arrayGP['calle'])) {
                $errores['calle'] = "Este campo es obligatorio";
            } elseif (strlen($arrayGP['calle']) < 8)  {
                $errores['calle'] = "Debe completar los datos correctamente";
            }
        }


        if (isset($arrayGP['telefono'])) {
            if (empty($arrayGP['telefono'])) {
                $errores['telefono'] = "Este campo es obligatorio";
            } if (strlen($arrayGP['telefono']) < 10)  {
                $errores['telefono'] = "Debe tener al menos 10 caracteres incluyendo número de área sin 0 y sin 15, por ej: 1198765432";
            }
        }
 






        
    





        /* Validacion ciudad */
        if (isset($arrayGP["ciudad"])) {
            if (empty($arrayGP["ciudad"])) {
                $errores["ciudad"] = "* Este campo no debe estar vacio";
            } elseif (strlen($arrayGP["ciudad"]) <= 4) {
                $errores["ciudad"] = "Debe tener mas de cuatro caracteres";
            }
        }

        /* Validaciòn Mail */
        if (isset($arrayGP["email"])) {
            if (empty($arrayGP["email"])) {
                $errores["email"] =  "hey, este campo no puede estar vacìo";
            }
        } elseif (!filter_var($arrayGP["email"], FILTER_VALIDATE_EMAIL)) {
            $errores["email"] = "Debes ingresar un mail valido";
        }



        /* Validaciòn Password */
        if (isset($arrayGP['password'])) {
            if (empty($arrayGP['password'])) {
                $errores['password'] = "Este campo debe ser completado";
            } elseif (strlen($arrayGP['password']) < 8) {
                $errores['password'] = "Debe contener al menos 8 caracteres";
            }
        }

        /* Validaciòn Repassword */
        if (isset($arrayGP['repassword'])) {
            if (empty($arrayGP['repassword'])) {
                $errores['repassword'] = "Debes completar este campo";
            }
            if ($arrayGP['password'] != $arrayGP["repassword"]) {
                $errores['repassword'] = "La contrdaseña no coincide";
            }
        }

        if (count($errores) === 0) {
            header("location:pag registro.php");
        } else {
            return $errores;
        }
    }
}



 
