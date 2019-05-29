<?php
include_once("Controladores/loader.php");
if ($_POST){
  $errores=$validator->validateInput($_POST);
  if (count($errores)===0) {
    $user = new User($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password']);
    if ($_FILES) {
      $user->setAvatar($_FILES);
    }
    $userArray=$factory->create($user,$_FILES);
    $db->save($userArray);
    header("location:login.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
<head>
  <?php include_once('components/head_registro.php'); ?>
</head>
<div class="barra">
<?php include_once('components/navbar.php'); ?>
<?php if(isset($errores)):
      echo "<ul class='alert alert-danger text-center'>";
      foreach ($errores as $key => $value) :?>
        <li><?=$value;?> </li>
        <?php endforeach;
      echo "</ul>";
      endif;?>
    <div class="profile col-4">
    <form action="" method="post" enctype= "multipart/form-data">
    <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group"> <!-- Nombre -->
      <label for="full_name_id" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="nombre" value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>"  placeholder="Ingresar Nombre">
    </div>
    <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group"> <!-- Apellido -->
      <label for="apellido" class="control-label">Apellido</label>
        <input type="text" class="form-control" id="Apellido" name="apellido" value="<?=(isset($errores["apellido"]) )? "" : inputUsuario("apellido");?>" placeholder="Ingresar Apellido">
    </div>
    <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group"> <!-- E-mail -->
      <label for="email" class="control-label">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="<?=(isset($errores["email"]) )? "" : inputUsuario("email");?>" placeholder="Ingresar numero e-mail de Conctato">
      </div>
    <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group"> <!-- Password -->
      <label for="password" class="control-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar Contraseña del usuario">
    </div>
    <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group"> <!--Confirmacion de Password -->
      <label for="repassword" class="control-label">Confirmar Contaseña</label>
        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Ingresar Confirmacion de Contraseña del usuario">
    </div>
    <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
    </div>
    <div class="form-group">
      <label for="fotoperfil" class="control-label">Foto de Perfil</label>
        <br>
        <input  type="file" name="avatar" value=""/>
    </div>
    <div class="submit">
      <input type="submit" value="Registrarse" id="form_button" />
    </div>
  </form>
            <button type="button" class="btn btn-danger"href="logout.php"> Logout    </button>
            </h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> <?=$_SESSION["email"];?> </h2>
            </div>