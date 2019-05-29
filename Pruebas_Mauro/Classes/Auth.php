<?php

class Auth
{
    static public function IniSession()
    {
        if(!isset($_SESSION)){
            session_start();
        }
    }
    static public function validatePassword($password, $hash)
    {
        return password_verify($password, $hash);
    }
    static public function setSession($user)
    {
        $_SESSION["nombre"]=$user["nombre"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["perfil"]= $user["perfil"];
        $_SESSION["avatar"]= $user["avatar"];
    }
    static public function setCookie($user)
    {
        setcookie("email",$user["email"],time()+3600);
        setcookie("password",$user["password"],time()+3600);
    }
  
    static public function validateUser()
    {
        if (isset($_SESSION['email'])){
            return true;
        }elseif(isset($_COOKIE['email'])){
            $_SESSION['email']=$_COOKIE['email'];
            return true;
        }else {
            return false;
        }
    }
    // public function login($email)
    // {
    //     Session::set('email', $email);
    //     Cookie::set('email', $email, 3600);
    // }
    public function logout()
    {
        if(!$_SESSION) {
            
        }
    }
    public function check()
    {
        return isset($_SESSION['logged']);
    }
}