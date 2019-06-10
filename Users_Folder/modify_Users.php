<?php
require_once("Controladores/loader.php");
if (isset($_GET["id"])) {
  $id_User=$_GET["id"];
  $usermodify =  Querys::updateUser($pdo,'users',$id_User);
}

if (isset($_POST["modificar"])) {
    foreach ($_POST as $key => $value) {
    $query=$pdo->prepare("UPDATE users SET $key='$value' WHERE users.id=:id");
    $query->bindValue(':id',$_POST['id']);
    $query->execute();
    header('Location:list_Users.php');
    }
  } elseif (isset($_POST["no"])){
      header('Location:list_Users.php');
      exit;
  }
 ?>
    <form class="" action="" method="post">
        <h3><?= $usermodify ["name"] ;?></h3>
        <br>
        <?php foreach ($usermodify as $key => $value) : ?>
            <label><?= $key?> :</label>
            <?php if($key =="id"){?>
                <input type="text" disabled name="<?= $key?>" value="<?= $value?> ">
            <?php }else{?>
                <input type="text" name="<?= $key?>" value="<?= $value?>">
            <?php }?>
            <br>
      <?php endforeach;?>
    <br>
    <p>Esta seguro que quieres modificar este usuario?</p>
      <input type="submit" name="modificar" value="si">
      <input type="submit" name="no" value="no">
      <input type="hidden" name="id" value="<?=$id_user;?>">
   </form>
