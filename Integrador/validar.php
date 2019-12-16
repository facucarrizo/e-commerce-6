<?php
    function validarregistracion($unarray){
      $errores=[];
      if ($_POST) {
        if (isset($_POST["nombre"])) {
          if ( empty ($_POST["nombre"])) {
               $errores["nombre"]= "* Este campo no debe estar vacio";
          }
          elseif (strlen($_POST["nombre"]) <= 2 ) {
            $errores["nombre"]="* Debe tener mas de dos caracteres";
          }
          else {
            // todo bien
          }
        }
        if (isset($_POST["apellido"])) {
            if ( empty ($_POST["apellido"])) {
                 $errores["apellido"]= "* Este campo no debe estar vacio";
            }
            elseif (strlen($_POST["apellido"]) <= 2 ) {
              $errores["apellido"]="* Debe tener mas de dos caracteres";
            }
            else {
              // todo bien
            }
        }
        if (isset($_POST["mail"])) {
          if ( empty ($_POST["mail"])) {
            $errores["mail"]= "* Este campo no debe estar vacio";
       }
       if (!filter_var ($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
         $errores["mail"]="* Ingresar un Email valido";
       }
       else {
        //  todo bien
       }
       if (isset($_POST["contraseña"])) {
        if ( empty ($_POST["contraseña"])) {
          $errores["contraseña"]= "* Este campo no debe estar vacio";
     }
     elseif (strlen($_POST["contraseña"]) <6 ) {
      $errores["contraseña"]="* Debe tener mas de seis caracteres";
    }
    else{
      // todo bien
    }
       }
       if (isset($_POST["recontraseña"]))  {
        if ( empty ($_POST["recontraseña"])) {
          $errores["recontraseña"]= "* Este campo no debe estar vacio";
     }
     if ($_POST["contraseña"]!=$_POST["recontraseña"]) {
       $errores["recontraseña"]="* Las contraseñas deben coicindir";
     }
     else {
      //  todo bien
     }
       }
     if (isset($_POST["ciudad"])) {
      if ( empty ($_POST["ciudad"])) {
           $errores["ciudad"]= "* Este campo no debe estar vacio";
      }
      elseif (strlen($_POST["ciudad"]) <= 4 ) {
        $errores["ciudad"]="* Debe tener mas de cuatro caracteres";
      }
      else {
        // todo bien
      }
       }
       if (isset($_POST["barrio"])) {
        if ( empty ($_POST["barrio"])) {
             $errores["barrio"]= "* Este campo no debe estar vacio";
        }
        elseif (strlen($_POST["barrio"]) <= 4 ) {
          $errores["barrio"]="* Debe tener mas de cuatro caracteres";
        }
        else {
          // todo bien
        }
         }
         if (isset($_POST["postal"])) {
          if ( empty ($_POST["postal"])) {
               $errores["postal"]= "* Este campo no debe estar vacio";
          }
          
          else {
            // todo bien
          }
           }
           if (isset($_POST["nacimiento"])) {
            if ( empty ($_POST["nacimiento"])) {
                 $errores["nacimiento"]= "* Este campo no debe estar vacio";
            }
           
            else {
              // todo bien
            }
             }
       if (count($errores)=== 0) {
        header("location:pag registro.php");
        
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
