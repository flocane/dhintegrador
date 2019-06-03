<?php
include_once("Controladores/loader.php");
if ($_POST){
  $user = new User($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'],$_POST["rol"]);
  $errores=$validator->validateInput($_POST);
    if(count($errores)==0){
      $userfind = $db->searchMysql($user->getEmail(),$pdo,'users');
      if($userfind != false){
        $errores["email"]="Usuario ya registrado";
      }else{
        $avatar = $factory->createAvatar($_FILES);
        $userArray=$factory->create($user,$avatar);
        MYSQL::saveUser($user,$avatar);
        header("location:login.php");
        exit;
        }
      }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
<head>
    <meta charset="utf-8">
    <title>Formulario de Contacto Aurora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">
</head>
<body>
  <ul>
      <?php
        if(isset($errores)){
          foreach ($errores as $key => $value) :?>
            <li class="alert alert-danger"><?=$value;?> </li>
          <?php endforeach;
        }
      ?>
  </ul>
  <div class="barra">
<?php include_once('components/navbar.php'); ?>
</div>
<br>
<br>
<br>
<div class="formulario col-6">
  <h1>&bull; REGISTRATE &bull;</h1>
  <form action="" method="post" enctype= "multipart/form-data">
  <div class="bar">
    <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
   </div>  
  <div class="form-group"> <!-- Nombre -->
      <label for="full_name_id" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="Nombre" name="nombre" value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>"  placeholder="Ingresar Nombre">
    </div>
    <div class="form-group"> <!-- Apellido -->
      <label for="apellido" class="control-label">Apellido</label>
        <input type="text" class="form-control" id="Apellido" name="apellido" value="<?=(isset($errores["apellido"]) )? "" : inputUsuario("apellido");?>" placeholder="Ingresar Apellido">
    </div>
    <div class="form-group"> <!-- E-mail -->
      <label for="email" class="control-label">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" value="<?=(isset($errores["email"]) )? "" : inputUsuario("email");?>" placeholder="Ingresar numero e-mail de Conctato">
      </div>
    <div class="form-group"> <!-- Password -->
      <label for="password" class="control-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar Contraseña del usuario">
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
    <div class="bar">
    <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
   </div>  
    <div class="submit">
      <input type="submit" class="btn btn-danger" value="Registrarse" id="form_button" />
    </div>
  </form>
            </div>
        </div>
  `  </div>
  `</div>
<?php include_once('components/footer.php'); ?>
