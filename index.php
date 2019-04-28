<?php
include_once("controladores/loader.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <?php include_once('components/head.php'); ?>
  </head>
  <body>
    <div class="container-fluid px-0">
          <?php include_once('components/navbar.php'); ?>
      <div class="section1 row mx-0">
        <h2 class="first-title"> Tu futuro proyecto comienza aqui</h2> <br>
        <button type="button" class="btn btn-primary cotizar" name="button">Cotizar ahora</button>
      </div>

        <section class="section2 row mx-0">
            <!-- PRIMERA CARD -->
            <div class="card-titulo col-12 col-md-12" style="width: 18rem;">
                <h2 class="titulo-seccion"> Especiales </h2>
              </div>
              <article class="articulo1 p-0 col-12 col-md-6 col-lg-6">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="img/cemento.jpg" alt="ofertas" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h1>Ofertas</h1>
                      <p> Descuentos de temporada, liquidación, promociones </p>
                      <p> <button type="button" class="btn btn-primary">Ver ofertas de materiales</button>
                    </div>
                  </div>
                  </div>
              </article>
                  <!-- SEGUNDA CARD -->
              <article class="articulo2 p-0 col-12 col-md-6 col-lg-6">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="img/casquito.png" alt="instructivos" style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                      <h1> Instructivos </h1>
                      <p> Instructivos, manuales y documentación </p>
                      <p> <button type="button" class="btn btn-primary"> Ver </button>
                    </div>
                  </div>
                  </div>
              </article>

          </section>

          <div class="container">

            <section class="section3 row mx-0">
                          <div class="card col-12 col-md-12" style="width: 18rem;">
                            <h2 class="titulo-seccion">Categorías </h2>
                          </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/planos.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1> Diseño de espacios </h1>
                                <p> Agrimensoría, Arquitectura, Ingeniería </p>
                                <p> <button type="button" class="btn btn-primary">Ver más </button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/pincel.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1> Pintura </h1>
                                <p> Restauración de paredes </p>
                                <p> <button type="button" class="btn btn-primary"> Ver más </button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/obrero1.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1> Herrería </h1>
                                <p> Diseño y armado de rejas, vallas, etc. </p>
                                <p> <button type="button" class="btn btn-primary"> Ver más </button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/obrero-cheto.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1> Llenado de cemento </h1>
                                <p> Alquiler de maquinaria para cementado, asfaltado, etc. </p>
                                <p> <button type="button" class="btn btn-primary"> Ver más </button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/terminaciones.jpeg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1> Terminaciones en piedra </h1>
                                <p> Venecitas, marmol, símiles </p>
                                <p> <button type="button" class="btn btn-primary"> Ver más </button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/presupuesto.jpeg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1> Presupuestación </h1>
                                <p> Simulador de presupuesto </p>
                                <p> <button type="button" class="btn btn-primary"> Presupuesta ahora</button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <!-- <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/cemento.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>productos</h1>
                                <p>lista de principales</p>
                                <p> <button type="button" class="btn btn-primary">comprar</button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/cemento.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>productos</h1>
                                <p>lista de principales</p>
                                <p> <button type="button" class="btn btn-primary">comprar</button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/cemento.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>productos</h1>
                                <p>lista de principales</p>
                                <p> <button type="button" class="btn btn-primary">comprar</button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/cemento.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>productos</h1>
                                <p>lista de principales</p>
                                <p> <button type="button" class="btn btn-primary">comprar</button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/cemento.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>productos</h1>
                                <p>lista de principales</p>
                                <p> <button type="button" class="btn btn-primary">comprar</button>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-4" style="width: 18rem;">
                          <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="img/cemento.jpg" alt="oferta" style="width:300px;height:300px;">
                              </div>
                              <div class="flip-card-back">
                                <h1>productos</h1>
                                <p>lista de principales</p>
                                <p> <button type="button" class="btn btn-primary">comprar</button>
                              </div>
                            </div>
                            </div>
                        </div> -->

          </section>
        </div>
      </div>
            <?php include_once('components/footer.php'); ?>
      </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
