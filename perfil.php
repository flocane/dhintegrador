<?php
//require 'funciones.php';
require 'controladores/loader.php';
if($auth->check()) {
$username = $_SESSION['logged'];
}

?>
<!DOCTYPE html>
<html>
    <?php require "components/head_perfil.php";?>
    <body>
    <?php include_once('components/navbar.php'); ?>
        <br>
        <br>
        <br>
        <div class=container col 12>
        <div class="profile col-4">
            <img src="imagenes/<?=$_SESSION["avatar"];?>" alt="Avatar">
            <h1>Bienvenido/a:
              <br>
              <?=$_SESSION["name"];?>
            <br>
            <button type="button" class="btn btn-danger"> <a href="logout.php">Logout </a> </button>
            </h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
                <h2> <?=$_SESSION["email"];?> </h2>
            </div>
        <div class='carrito col-10'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Actualiza tus Datos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div>
                <label for="password">Password</label>
                    <input name="password"type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group>
                <label for="repassword">Confirmar Password</label>
                    <input type="repassword" name="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <div class="form-group">
                <label for="fotoperfil" class="control-label">Foto de Perfil</label>
                 <br>
               <input  type="file" name="avatar" value=""/>
            </div>
            <button type="submit" class="btn btn-danger"> Actualizar </button>
            </h1>
            </form>
        </div>
    </div>
        <div class=container2 col 12>
        <div class='carrito col-6'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Usuarios en Base de Datos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            </form>
        </div>
        <div class='carrito col-6'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Pedidos Confirmados
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            </form>
        </div>
        <div class='carrito col-6'>
        <form action="" method="POST">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>Listado de Productos
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            </form>
        </div>
</div>
        <div>
        <?php include_once('components/footer.php'); ?>
        </div>
    </body>
</html>
