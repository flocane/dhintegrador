<?php
include_once("controladores/loader.php");
// dd($_POST);
if($_POST){
if(count($errores)===0){
  $usuario = buscarEmail($_POST["email"]);
  if($usuario ==null){
    $errores["email"]="Usted no esta registrado";
  }else {
    if(password_verify($_POST["password"],$usuario["password"])===false){
      $errores["password"]= "Datos incorrectos";
    }
  }
  crearSesion($usuario,$_POST);

  if (validarUsuario()){
    header("location: index.php");
  }else{
    header("location: registro.php");
  }
}}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php include_once('head.php'); ?>
  </head>
  <body>
  <div class="container-fluid px-0">
  <?php include_once('navbar.php'); ?>
<section>
  <br>
  <br>
  <br>
  <br>
  <h1> LOGIN</h1>
    <div class="container">
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-12">
      <label for="inputEmail">Email</label>
      <input name="email"type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
<div class="form-group col-12">
    <label for="inputAddress2">Password</label>
    <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
  </div>
</div>
  <div class="form-group col-12">
    <div class="form-check">
      <button type="submit" class="btn btn-primary">Sign in</button>
      <div>
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Remember me
      </label>
      </div>
  </div>
</form>
<br>
</section>
<?php include_once('footer.php'); ?>
  </body>
</html>
