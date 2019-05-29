<?php
include_once("Controladores/loader.php");
if($_POST){
  $user = new user (null, null , $_POST["email"], $_POST["password"]);
  $errors=$validator->validate($user);
if(count($errors)===0){
  $userfind= $db->search($user->getEmail());
  if ($userfind== null){
    $errors['email']="Usuario no registrado";
  }else{
      if($auth->validatePassword($user->getPassword(),$userfind["password"])!=true){
        $errors['password']="Por favor Verifique los Datos";
      }else{
        Auth:: setSession($userfind);
        if (isset($_POST['recordar'])) {
          Auth:: setCookie($userfind);
        }
        if (Auth::validateUser()) {
          header("location:perfil-mp.php");
        }else{
          header("location:registro.php");
        }
      }
    }
  }
}
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
