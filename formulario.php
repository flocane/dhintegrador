<?php
include_once("funciones.php");

if ($_POST) {
  $errores =validar($_POST);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="master.css">
  <title>Formulario de Contacto</title>
</head>

<body>
  <!-- <div class="container"> -->
  <ul>
      <?php
        if(isset($errores)){
          foreach ($errores as $key => $value) :?>
            <li class="alert alert-danger"><?=$value;?> </li>  
          <?php endforeach;
        }
      ?>
<!-- </a><input name="Provincia" type="text" id="provincia"/>
            <br>
            <a>Pais:</a>
            <select name="departamento">
                <option selected>Seleccion de Pais</option>
                <option value="1">Argentina</option>
                <option value="2">Brasil</option>
                <option value="3">Uruguay</option>
                <option value="3">Paraguay</option>
                <option value="3">Chile</option>
              </select>
            <br>
            <a>E-Mail:</a><input name="E-mail" type="text" id="email"/>
            <br>
            <a>Telefono:</a><input name="Tel" type="text" id="tel" />
            <br>
            <label>Consulta</label>
            <br>
            <textarea id="textarea" name="observaciones" id="observaciones" cols="50"></textarea>
            <br><br>
            <div class="form-group">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
          </form> -->
PRUEBA DE FORMULARIO DE CONTACTO -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Formulario de Contacto</legend>
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
                        <div class="form-group"><!-- Contacto-->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon">Contacto</i>
                            </span>
                        <div class="col-md-8"> <!-- Ingresar la Consulta-->
                            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese la consulta." rows="7"></textarea>
                        </div>
                        <div class="form-group"> <!-- Boton de Enviar-->
                          <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                          </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
