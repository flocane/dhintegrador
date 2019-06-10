<!DOCTYPE html>

<?php
require_once("Controladores/loader.php");

$id_user=$_GET["id"];
$userSelect = Querys::indexUser($pdo,'users',$id_user)
?>
<html lang="es" dir="ltr">
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Mostrar los datos dele usuario</title>
  </head>
  <body>
    <h1>Datos del usuario</h1>
    <?php foreach ($userSelect as $key => $value):?>
      <h2><?= $value["name"] ;?></h2>
    <?php endforeach;?>
    <ul>
    <?php foreach ($userSelect as $index => $attributes) : ?>
      <?php foreach($attributes as $key => $value): ?>
        <li><?= $key." : ".$value ?> </li>
      <?php endforeach;?>
    <?php endforeach;?>
    </ul>
    <a href="Users_Folder/list_Users.php">Retornar</a>
  </body>
 </html>
