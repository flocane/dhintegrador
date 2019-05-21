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
    <?php require "components/navbar_perfil.php"; ?>
        <br>
        <br>
        <br>
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
        <div class='carrito col-8'>
            <?php require "carrito.php"; ?>
        </div>
        <div>
        <?php include_once('components/footer.php'); ?>
        </div>
    </body>
</html>
