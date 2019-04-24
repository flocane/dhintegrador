<?php

function validar($datos){
    $errores=[];
    $nombre = trim($datos["nombre"]);

    if (empty($nombre)) {
        $errores["nombre"]="Por favor completar campo Nombre no puede estar en blanco";
    }
    $apellido= trim($datos["apellido"]);
    if (empty($apellido)) {
        $errores["apellido"]="Por favor completar campo Apellido no puede estar en blanco";
    }
    $domicilio = $datos["domicilio"];
    if (empty($domicilio)) {
        $errores["apellido"]="Por favor completar campo Domicilio no puede estar en blanco";
    }
    $telefono = $datos["Telefono"];
    if (empty($telefono)) {
        $errores["apellido"]="Por favor completar campo Domicilio no puede estar en blanco";
    }
    $email= trim($datos["email"]);

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)||$email === "" ) {
        $errores["email"]="Debe completar Email o e-mail invalido ";
    }
    
    $password= trim($datos["password"]);
    $repassword= trim($datos["repassword"]);

    if (empty($password)) {
        $errores["password"] = " No puede dejar en blanco la contraseña";
    }elseif(strlen($password<6)){
        $errores["password"]= "La contraseña debe tener como minimo 6 caracteres";
    }elseif ($repassword ==="") {
        $errores["repassword"]="Tiene que confirmar la contraseña";
    }elseif ($password!=$repassword) {
        $errores["repassword"]="Las contraseñas deben ser iguales";
    }
    return $errores;
}
function imputUsuario ($campo){
    if (isset($_POST[$campo])) {
        return $_POST[$campo];
    }
}
function armarRegistro($datos){
    $usuario=[
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "password"=>password_hash($datos["password"],PASSWORD_DEFAULT)
    ];
   return $usuario;
}
function guardar($usuario){
    $jusuario =json_encode($usuario);
    file_put_contents("usuarios.json",$jusuario.PHP_EOL, FILE_APPEND);
}
