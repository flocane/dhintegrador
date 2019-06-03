<?php
include_once("Controladores/loader.php");
if ($_POST) {
  $errores =$validator->validateInput($_POST);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  <?php include_once('components/navbar.php'); ?>
<section>
  <br>
  <br>
  <br>
  <br>
  <div class="formulario col-6">
            <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales
            ">
            <h1>&bull; FORMULARIO DE CONTACTO &bull;</h1>
            <div class="bar">
                <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
            </div>
            <form class="form-horizontal" action="" method="POST">
                    <fieldset>
                        <div class="form-group"> <!-- Nombre -->
                        <label for="full_name_id" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Ingresar Nombre">
                        </div>
                        <div class="form-group"> <!-- Apellido -->
                        <label for="apellido" class="control-label">Apellido</label>
                        <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="Ingresar Apellido">
                        </div>
                        <div class="form-group"> <!-- Domicilio -->
                            <label for="domicilio" class="control-label">Domicilio</label>
                            <input type="text" class="form-control" id="Domicilio" name="domicilio" placeholder="Ingresar su Domiclio">
                        </div>
                        <div class="form-group"> <!-- Telefono -->
                            <label for="telefono" class="control-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresar numero telefonico de Conctato">
                        </div>
                        <div class="form-group"> <!-- E-mail -->
                            <label for="email" class="control-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar numero e-mail de Conctato">
                        </div>
                        <div class="form-group"> <!-- Ciudad-->
                            <label for="ciudad" class="control-label">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad o Localidad">
                        </div>
                        <div class="bar">
                        <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
                        </div>
                        <div class="form-group"><!-- Contacto-->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon">Contacto</i>
                            </span>
                        <div class="col-md-8"> <!-- Ingresar la Consulta-->
                            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese la consulta." rows="7"></textarea>
                        </div>
                        <div class="bar">
                        <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
                        </div>
                    </fieldset>
                </form>
            <button type="submit" class="btn btn-danger"> Contactarse </button>
            </form>
<br>
</div>
</section>
<?php include_once('components/footer.php'); ?>
  </body>
</html>