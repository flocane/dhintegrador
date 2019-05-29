<?php
function validar($datos){
    $errores=[];

if (isset($datos["nombre"])) {
    $nombre = trim($datos["nombre"]);
  if (empty($nombre)) {
      $errores["nombre"]="Por favor completar campo Nombre no puede estar en blanco";
  }
}
  if (isset($datos["apellido"])) {
    $apellido= trim($datos["apellido"]);
    if (empty($apellido)) {
        $errores["apellido"]="Por favor completar campo Apellido no puede estar en blanco";
    }
  }

    if (isset($datos["domicilio"])) {
   $domicilio = $datos["domicilio"];
   if (empty($domicilio)) {
       $errores["domicilio"]="Por favor completar campo Domicilio no puede estar en blanco";
   }
 }
   if (isset($datos["telefono"])) {
   $telefono = $datos["telefono"];
   if (empty($telefono)) {
       $errores["telefono"]="Por favor completar campo Telefono no puede estar en blanco";
   }
 }
 if (isset($datos["email"])) {
   $email= trim($datos["email"]);

   if (!filter_var($email,FILTER_VALIDATE_EMAIL)||$email === "" ) {
       $errores["email"]="E-mail Invalido ";
   }

 }
if (isset($datos["password"])) {
  $password= trim($datos["password"]);

  if (empty($password)) {
      $errores["password"] = " No puede dejar en blanco la contraseña";
  }elseif(strlen($password<6)){
      $errores["password"]= "La contraseña debe tener como minimo 6 caracteres";
  }
  if (isset($datos["repassword"])) {
     $repassword= trim ($datos["repassword"]);
    if ($repassword ==="") {
        $errores["repassword"]="Tiene que confirmar la contraseña";
    }elseif ($password!=$repassword) {
        $errores["repassword"]="Las contraseñas no coinciden";
    }
  }
}

    return $errores;
}
function inputUsuario ($campo){
    if (isset($_POST[$campo])) {
        return $_POST[$campo];
    }
}
function armarRegistro($datos,$imagen){
  $usuario = [
      "nombre"=>$datos["nombre"],
      "email"=>$datos["email"],
      "password"=> password_hash($datos["password"],PASSWORD_DEFAULT),
      "avatar"=>$imagen,
      "perfil"=>1
  ];
  return $usuario;
}
function setAvatar($imagen){
    $nombre = $imagen["avatar"]["name"];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen["avatar"]["tmp_name"];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."/imagenes/";
    $avatarUsuario = uniqid();
    $archivoDestino = $archivoDestino.$avatarUsuario;
    $archivoDestino = $archivoDestino.".".$ext;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    $avatarUsuario = $avatarUsuario.".".$ext;
    return $avatarUsuario;
}

function guardar($usuario){
    $jusuario =json_encode($usuario);
    file_put_contents("usuarios.json",$jusuario.PHP_EOL, FILE_APPEND);
}
function buscarEmail($email){
    $baseDatosUsuarios = abrirBaseDatos();
    foreach ($baseDatosUsuarios as $usuario) {
        if($usuario["email"]===$email){
            return $usuario;
        }
    }
    return null;
}


function abrirBaseDatos(){
    $baseDatosUsuarios=[];
    $datosjson = file_get_contents("usuarios.json");
    $datosjson = explode(PHP_EOL,$datosjson);
    array_pop($datosjson);
    foreach ($datosjson as  $usuario) {
        $baseDatosUsuarios[]= json_decode($usuario,true);
    }
    return $baseDatosUsuarios;
}

function crearSesion($usuario, $datos){
    $_SESSION["nombre"]=$usuario["nombre"];
    $_SESSION["email"]=$usuario["email"];
    $_SESSION["perfil"]=$usuario["perfil"];
    $_SESSION["avatar"]=$usuario["avatar"];
    if (isset($datos["recordar"])){
        setcookie("password",$datos["password"],time()+3600);
    }
}

function validarUsuario(){
    if(isset($_SESSION["email"])){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else
        return false;
}
