<?php 

/* Para hacer un var_dump copado */
function pre($vardamp){
    echo "<pre>";
    var_dump($vardamp);
    echo "</pre>";
}


/* Validar formulario de registro */

function validarRegistracion($arrayGP){
    /* array de errores */
    $errores=[];
    if($arrayGP){
        /* Validacion nombre */
        if(isset($arrayGP['nombre'])){
            if(empty($arrayGP['nombre'])){
                $errores['nombre']= "Este campo es obligatorio";
            }
           elseif (strlen($arrayGP['nombre'])<3) {
               $errores['nombre']= "El nombre de usuario debe tener al menos 3 caracteres";
            }
           }



           /* Validacion apellido */
           if (isset($arrayGP["apellido"])) {
            if ( empty ($arrayGP["apellido"])) {
                 $errores["apellido"]= "* Este campo no debe estar vacio";
            }
            elseif (strlen($arrayGP["apellido"]) <= 2 ) {
              $errores["apellido"]="Debe tener mas de dos caracteres";
            }
             }
               


             /* Barrio */
             if (isset($arrayGP["barrio"])) {
                if ( empty ($arrayGP["barrio"])) {
                     $errores["barrio"]= "* Este campo no debe estar vacio";
                }
                elseif (strlen($arrayGP["barrio"]) <= 4 ) {
                  $errores["barrio"]="Debe tener mas de cuatro caracteres";
                }
               }
               /* codigo postal */
                if (isset($arrayGP["postal"])) {
                    if ( empty ($arrayGP["postal"])) {
                         $errores["postal"]= "* Este campo no debe estar vacio";
                    }
                                    }
                     
                  /* fecha nacimiento  */
                  if (isset($arrayGP["nacimiento"])) {
                    if ( empty ($arrayGP["nacimiento"])) {
                         $errores["nacimiento"]= "* Este campo no debe estar vacio";
                    }
                     }





             /* Validacion ciudad */
             if (isset($arrayGP["ciudad"])) {
                if ( empty ($arrayGP["ciudad"])) {
                     $errores["ciudad"]= "* Este campo no debe estar vacio";
                }
                elseif (strlen($arrayGP["ciudad"]) <= 4 ) {
                  $errores["ciudad"]="Debe tener mas de cuatro caracteres";
                }

         /* Validaciòn Mail */
       if (isset($arrayGP["email"])) {
        if (empty($arrayGP["email"])){
            $errores["email"]=  "hey, este campo no puede estar vacìo";}
       } 
       elseif(!filter_var($arrayGP["email"], FILTER_VALIDATE_EMAIL)){
           $errores["email"]="Debes ingresar un mail valido";
       }
           
           if (isset($arrayGP['password'])){
               if(empty($arrayGP['password'])){
                   $errores['password']="Este campo debe ser completado";
               }
               elseif (strlen($arrayGP['password']) < 8) {
                   $errores['password']= "Debe contener al menos 8 caracteres";
               }
           }
           if (isset($arrayGP['repassword'])){
               if (empty($arrayGP['repassword'])){
                   $errores['repassword']= "Debes completar este campo";
               }
             if ($arrayGP['password'] != $arrayGP["repassword"]){
                 $errores['repassword']= "La contrdaseña no coincide";
             }
           }
            
  if (count($errores) === 0) {
      return true;
  }
   else {
       return $errores;
   }

    }
}
 }
function abrirJson($unArvhivo){
    $usuariosGuardados = file_get_contents($unArvhivo);
    $explodeDeUsuarios = explode (PHP_EOL, $usuariosGuardados);
    array_pop($explodeDeUsuarios);
    return $explodeDeUsuarios; 
 }


function persistirDato ($a, $b) {
    if (isset($a[$b])) {
        return $a[$b];
    } else return "";
}




?>