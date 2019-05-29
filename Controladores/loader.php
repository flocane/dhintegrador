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
<<<<<<< HEAD
=======
  require 'Clasess/Conector.php';
>>>>>>> Mauro

  Session::start();

  $validator = new Validator();
  $factory = new UserFactory();
  $db = new DBJSON('users.json');
  $auth = new Auth();
<<<<<<< HEAD
=======
// PARAMETROS PARA BASE DE DATOS
$host = "127.0.0.1";
$db_name = "aurora_db";
$port = "8889";
$db_user = "root";
$db_pass = "root";
// END PARAMETROS PARA BASE DE DATOS

  $pdo = Connector::make($host,$db_name,$db_user,$db_pass, $port);
  $queryUsers = new QueryUsers($pdo);
  $users = $queryUsers->indexUser('users');
>>>>>>> Mauro
