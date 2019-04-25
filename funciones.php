<?php
session_start();
require 'helpers.php';

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
// AGREGO MAURO
    $usuario['id'] = idGenerado();

   return $usuario;
}
// AGREGO MAURO

function idGenerado(){
    $archivo = file_get_contents("users.json");

    if($archivo == "") {
        return 1;
    }

    $usuarios = explode(PHP_EOL, $archivo);
    array_pop($usuarios);

    $UltimoUsuario = $usuarios[count($usuarios) - 1];
    $UltimoUsuario = json_decode($UltimoUsuario, true);

    return $UltimoUsuario['id'] + 1;
function guardar($usuario){
    $jusuario =json_encode($usuario);
    file_put_contents("usuarios.json",$jusuario.PHP_EOL, FILE_APPEND);
    }
}

// LOGIN AGREGO MAURO

function login($usuario)
{
    $_SESSION['email'] = $usuario['email'];
    setcookie('email', $usuario['email'], time() + 3600 * 24 * 7, "/");
}

// LOGOUT AGREGO MAURO

function logout()
{
    if(!isset($_SESSION)) {
        session_start();
    }
    session_destroy();
    setcookie('email', null, time() -1);
    redirect('registro.php');
}
// CONEXION CON BASE DE DATOS AGREGO MAURO

function dbConectar()
{
    $db = file_get_contents('usuarios.json');
    $arr = explode(PHP_EOL, $db);
    array_pop($arr);

    foreach($arr as $user) {
        $usuariosArray[] = json_decode($user, true);
    }

    return $usuariosArray;

}
// BUSCAR EN BASE DE DATOS POR EMAIL AGREGO MAURO

function BuscarEmail($email)
{
    $usuario = dbConectar();
    foreach($usuarios as $usuario) {
        if($usuario['email'] === $email) {
            return $usuario;
        }
    }
    return null;
}
