<?php

/* session_start(); */
require_once 'funciones.php';
$arrayDeErrores = "";

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        // LOGUEO AL USUARIO
        $arrayUsuarios = abrirJson('usuarios.json');
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
}

                    ?>