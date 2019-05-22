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
          header("location:perfil.php");
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
      <?php include_once('components/head_login.php'); ?>
  </head>
  <body>
  <div class="container-fluid px-0">
  <?php include_once('components/navbar.php'); ?>
<section>
  <br>
  <br>
  <br>
  <br>
  <div class="profile">
    <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Login
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>
                <label for="inputEmail">Email</label>
                    <input name="email"type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-12">
                <label for="inputAddress2">Password</label>
                    <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <button type="submit" class="btn btn-danger"> Sign In </button>
            </h1>
            </form>
<br>
</div>
</section>
<?php include_once('components/footer.php'); ?>
  </body>
</html>