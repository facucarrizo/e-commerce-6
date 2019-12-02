<?php
    function validarregistracion($unarray){
      $errores=[];
      if ($_POST) {
        if (isset($_POST["nombre"])) {
          if ( empty ($_POST["nombre"])) {
               $errores["nombre"]= "Este  campo no puede estar vacio";
          }
          elseif (strlen($_POST["nombre"]) <= 2 ) {
            $errores["nombre"]="Debe tener mas de dos caracteres";
          }
          else {
            // todo bien
          }
        }
        if (isset($_POST["apellido"])) {
            if ( empty ($_POST["apellido"])) {
                 $errores["apellido"]= "Este  campo no puede estar vacio";
            }
            elseif (strlen($_POST["apellido"]) <= 2 ) {
              $errores["apellido"]="Debe tener mas de dos caracteres";
            }
            else {
              // todo bien
            }
        }
        if (isset($_POST["mail"])) {
          if ( empty ($_POST["mail"])) {
            $errores["mail"]= "Este  campo no puede estar vacio";
       }
       if (!filter_var ($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
         $errores["mail"]="Ingresar un Email valido";
       }
       else {
        //  todo bien
       }
       if (isset($_POST["contraseña"])) {
        if ( empty ($_POST["contraseña"])) {
          $errores["contraseña"]= "Este  campo no puede estar vacio";
     }
     elseif (strlen($_POST["contraseña"]) <6 ) {
      $errores["contraseña"]="Debe tener mas de seis caracteres";
    }
    else{
      // todo bien
    }
       }
       if (isset($_POST["recontraseña"]))  {
        if ( empty ($_POST["recontraseña"])) {
          $errores["recontraseña"]= "Este  campo no puede estar vacio";
     }
     if ($_POST["contraseña"]!=$_POST["recontraseña"]) {
       $errores["recontraseña"]="las contraseñas deben coicindir";
     }
     else {
      //  todo bien
     }
       }
       if (count($errores)=== 0) {
         return true;
       }
    else {
      return $errores;
    }
        }
      }
    }
    function persistirDato($arrayE, $campo) {
      if( isset($arrayE[$campo]) ) {
          return "";
      } else {
          if(isset($_POST[$campo])) {
              return $_POST[$campo];
          }
      }
  }
    
    function armarArrayUsuario(){
    
    }
    function pre($algo){
        echo"<pre>";
        var_dump($algo);
        echo"</pre>";
    }
    
?>