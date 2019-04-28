<?php
include_once("Controladores/loader.php");
if ($_POST){
  $errores=validar($_POST);
  if (count($errores)===0) {
    $avatar= setAvatar($_FILES);
    $registro= armarRegistro($_POST,$avatar);
    guardar($registro);
    header("location:login.php");
    exit;
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
<br>
<br>
<br>
<br>
<br>
<?php if(isset($errores)):
      echo "<ul class='alert alert-danger text-center'>";
      foreach ($errores as $key => $value) :?>
        <li><?=$value;?> </li>
        <?php endforeach;
      echo "</ul>";
      endif;?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" enctype= "multipart/form-data">
                    <fieldset>
                    <br>
                        <legend class="text-center header">Formulario de Registro de Usuarios</legend>
                        <div class="form-group"> <!-- Nombre -->
                        <label for="full_name_id" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="nombre" value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>"  placeholder="Ingresar Nombre">
                        </div>
                        <div class="form-group"> <!-- Apellido -->
                        <label for="apellido" class="control-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="apellido" value="<?=(isset($errores["apellido"]) )? "" : inputUsuario("apellido");?>" placeholder="Ingresar Apellido">
                        </div>
                        <div class="form-group"> <!-- Usuario -->
                            <label for="usuario" class="control-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?=(isset($errores["usuario"]) )? "" : inputUsuario("usuario");?>" placeholder="Ingresar Nombre de Usuario">
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
                        </div>
                        <div class="form-group">
                            <label for="fotoperfil class="control-label" >Foto de Perfil</label>
                            <br>
                            <input  type="file" name="avatar" value=""/>
                        </div>

                        <div class="form-group"> <!-- Boton de Enviar Registro-->
                          <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg">Registrame</button>
                          </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once('components/footer.php'); ?>