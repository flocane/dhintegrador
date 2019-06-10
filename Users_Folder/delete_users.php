<?php
require_once("Controladores/loader.php");
if (isset($_GET["id"])) {
  $id_user=$_GET["id"];
  $userSelect = Querys::getUser($pdo,'users',$id_user);
}
if (isset($_POST["borrar"])) {
  Querys::deleteUser($pdo,'users',$id_user);
  header('Location:Users_Folder/list_users.php');
  exit;
}
elseif (isset ($_POST["no"])) {
  header("Location:Users_Folder/list_Users.php");
  exit;
}
 ?>
 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="container">
    <form class="" action="" method="post">
      <p>Esta seguro que quiere eliminar este usuario?</p>
      <input type="submit" name="borrar" value="si">
      <input type="submit" name="no" value="no">
      <input type="hidden" name="id" value="<?=$id_user;?>">
   </form>

    <?php foreach ($userSelect as $key => $value):?>
      <h1><?= $value["name"] ;?></h1>
    <?php endforeach;?>
    <ul>
    <?php foreach ($userSelect as $index => $attributes) : ?>
      <?php foreach($attributes as $key => $value): ?>
        <li><?= $key." : ".$value ?> </li>
      <?php endforeach;?>
    <?php endforeach;?>
    </ul>
</div>
  </body>
 </html>
