<?php
include_once("Controladores/loader.php");
// PRUEBA DE MAURO

// if($_POST) {
//   $usuario = $usersDb->BuscarEmail($_POST['email']);
//   if($usuario !== null) {
//       if(password_verify($_POST['password'], $usuario['password']) == true) {
//           $email = $_POST['email'];
//           redirect('Ingreso.php');
//       }
//   }

// }


// dd($_POST);
if($_POST){
  $errores=$validator->validateInput($_POST);
if(count($errores)===0){
  $usuario = new user (null, null , $_POST["email"], $_POST["password"]);
  $user= $db->search($usuario->getEmail());
  if ($user)
  {
      if($auth->validatePassword($usuario->getPassword(),$user["password"])){
      Session::set($user);
      header("location:index.php");
      }
  }

}}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php include_once('components/head.php'); ?>
  </head>
  <body>
  <div class="container-fluid px-0">
  <?php include_once('components/navbar.php'); ?>
<section>
  <br>
  <br>
  <br>
  <br>
  <h1> Login</h1>
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
<?php include_once('components/footer.php'); ?>
  </body>
</html>
