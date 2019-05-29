?>  
<!DOCTYPE html>
<html>
    <?php require 'components/head.php';?>
    <body>
        <div class="container">
            <?php require 'components/navbar.php'; ?>
            <div class="alert alert-danger" role="alert">
                Estimado No estas autorizado en este sistema <a href="registro.php" class="alert-link">Registrate!</a>
            </div>
            <div class="row">
                <div class="card col-4">
                    <img class="card-img-top" src="" alt="avatar">
                    <img class="card-img-top" src="imagenes/" alt="avatar default">
                    <div class="card-body">
                        <h5 class="card-title"><?="Bienvenido $username!" ?></h5>
                        <p class="card-text">Bienvenido al Sistema de Gestion de Proyectos de Construccion</p>
                        <a href="#" class="btn btn-primary"></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>