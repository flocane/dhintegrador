<?php

class Validator
{
    public function validate(User $user, string $cpassword = "")
    {
        $errors = array();

        if($user->getEmail() == "") {
            $errors['email'] = "Capo, me dejaste el email vacio";
        } else if(!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Crack el email no es valido";
        }

        if($user->getPassword() == "") {
            $errors['password'] = "Capo, me dejaste el password vacio";
        }else if(strlen($user->getPassword()) < 6) {
            $errors['password'] = "Maquina, el pass tiene que ser mayor a 6 digitos";
        } else if( $cpassword !== "" && $user->getPassword() !== $cpassword) {
            $errors['cpassword'] = "Idolo, las pass no coinciden";
        }
        if(isset($_FILES)) {
            if(!$this->validateAvatar($_FILES)) {
                $errors['image'] = "Imagen no valida";
            }
        }

        return $errors;
    }

    private function validateAvatar($file)
    {
        return true;
    }

    public function validateInput($data)
    {
      $errores=[];

  if (isset($data["nombre"])) {
      $nombre = trim($data["nombre"]);
    if (empty($nombre)) {
        $errores["nombre"]="Por favor completar campo Nombre no puede estar en blanco";
    }
  }
    if (isset($data["apellido"])) {
      $apellido= trim($data["apellido"]);
      if (empty($apellido)) {
          $errores["apellido"]="Por favor completar campo Apellido no puede estar en blanco";
      }
    }

      if (isset($data["domicilio"])) {
     $domicilio = $data["domicilio"];
     if (empty($domicilio)) {
         $errores["domicilio"]="Por favor completar campo Domicilio no puede estar en blanco";
     }
   }
     if (isset($data["telefono"])) {
     $telefono = $data["telefono"];
     if (empty($telefono)) {
         $errores["telefono"]="Por favor completar campo Telefono no puede estar en blanco";
     }
   }
   if (isset($data["email"])) {
     $email= trim($data["email"]);

     if (!filter_var($email,FILTER_VALIDATE_EMAIL)||$email === "" ) {
         $errores["email"]="E-mail Invalido ";
     }

   }
  if (isset($data["password"])) {
    $password= trim($data["password"]);

    if (empty($password)) {
        $errores["password"] = " No puede dejar en blanco la contraseña";
    }elseif(strlen($password<6)){
        $errores["password"]= "La contraseña debe tener como minimo 6 caracteres";
    }
    if (isset($data["repassword"])) {
       $repassword= trim ($data["repassword"]);
      if ($repassword ==="") {
          $errores["repassword"]="Tiene que confirmar la contraseña";
      }elseif ($password!=$repassword) {
          $errores["repassword"]="Las contraseñas no coinciden";
      }
    }
  }

      return $errores;
    }
}
