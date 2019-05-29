<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">Aurora Materiales</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
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
    <?php if (isset($_SESSION["name"])) {?>
      <li class="nav-item">
          Bienvenido/a: <?=$_SESSION["name"];?>
      <a class="nav-item" href="logout.php"> Logout</a> <?php } ?>
      </li>
    <?php if (empty($_SESSION)){?>
      <li class="nav-item">
        <a class="nav-link" href="registro.php" >Registrate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" >Ingresa</a>
      </li>
    <?php } ?>
  </ul>
</div>
</nav>
