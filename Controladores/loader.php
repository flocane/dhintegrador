<?php
  require "functions.php";
  require "helpers.php";
  require 'Classes/Auth.php';
  require 'Classes/Cookie.php';
  require 'Classes/Database.php';
  require 'Classes/DBJSON.php';
  require 'Classes/HashPassword.php';
  require 'Classes/Session.php';
  require 'Classes/User.php';
  require 'Classes/UserFactory.php';
  require 'Classes/Validator.php';
  require 'Classes/Conector.php';
  require 'Classes/MYSQL.php';
  require 'Classes/Querys.php';
  

  Session::start();

// PARAMETROS PARA BASE DE DATOS
$host = "localhost";
$db_name= "aurora_db";
$db_user = "root";
$db_pass = "root";
$port = "8889";
$charset = "utf8mb4";
// END PARAMETROS PARA BASE DE DATOS

$pdo = Connector::conexion($host,$db_name,$db_user,$db_pass,$port,$charset);
$validator = new Validator();
$factory = new UserFactory();
  // $db = new DBJSON('users.json');
$auth = new Auth();
 
