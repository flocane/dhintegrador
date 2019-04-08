<?php
include_once("funciones.php");
if ($_POST){
  $errores=validar($_POST);
  if (count($errores)===0) {
    $registro= armarRegistro($_POST);
    guardar($registro);
    header("location:login.php");
    exit;
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">
  </head>

<body>
<div class="container-fluid px-0">
      <nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="#">Aurora Materiales</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="formulario.php">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php" >Sobre Nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registro.php" >Registrate <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php" >Ingresa</a>
    </li>
  </ul>
</div>
</nav>
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
    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Formulario de Registro de Usuarios</legend>
                        <div class="form-group"> <!-- Nombre -->
                        <label for="full_name_id" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresar Nombre">
                        </div>
                        <div class="form-group"> <!-- Apellido -->
                        <label for="apellido" class="control-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="Ingresar Apellido">
                        </div>
                        <div class="form-group"> <!-- Usuario -->
                            <label for="usuario" class="control-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresar Nombre de Usuario">
                        </div>
                        <div class="form-group"> <!-- E-mail -->
                            <label for="email" class="control-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar numero e-mail de Conctato">
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
<footer class= "bg-dark foot p-3">
          <div class="row mx-0">
            <div class=" col-12 col-md-4">
              <h3>Aurora Materiales </h3>
                <ul>
                  <li><a href="#">Contacto</a> </li>
                  <li><a href="#">Institucional</a> </li>
                  <li><a href="#">Sobre Nosotros</a> </li>
                </ul>
                <p class="iconos">
                  <a href="http://wa.me/541130847961?text=hola queria realizar el siguiente pedido "><i class="fab fa-whatsapp"></i></a>
                  <a href="https://www.facebook.com/Aurora-Materiales-1531611110225827/">  <i class="fab fa-facebook"></i></a>
                  <i class="fab fa-instagram"></i>
                  <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                </p>
              </div>
              <div class="col-12 col-md-4">
                <h3>Direccion</h3>
                <p>Arregui 6066</p>
                <p>Tel 4641-3428 / 4642-3139</p>
              </div>
              <div class="d-none d-md-block col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.066965810513!2d-58.52232268476974!3d-34.627747980453336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc83004f56f3d%3A0x4cb567431cac3e4d!2sAurora+Materiales+S.A!5e0!3m2!1ses-419!2sar!4v1554669253895!5m2!1ses-419!2sar" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
                <hr>

        </footer>
