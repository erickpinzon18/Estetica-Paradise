<?php
  session_start();
  $type = $_SESSION['type'];
  $usuario = $_SESSION['dev'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trabajos Realizados</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
          <div class="container px-4 px-lg-5">
              <img alt="image" src="assets/img/LogoLet.png" height="40">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menú
                  <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ms-auto py-4 py-lg-0">
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="indexView.php">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" 
                          href=
                          <?php
                            if(isset($usuario)) {
                              if($type == "admin") {
                                echo '"adminView.php"';
                              } else {
                                echo '"generateView.php"';
                              }
                            } else {
                              echo '"loginView.php"';
                            }
                          ?>
                          >
                            <?php
                              if($type == "admin") {
                                echo 'Administracion';
                              } else {
                                echo 'Generador de Citas';
                              }
                            ?>
                          </a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="galleryView.php">Galeria</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contactView.php">Acerca de</a></li>
                    </ul>
                    <form class="form-inline" method="POST" action="modules/logout.php">
                    <?php
                        if(isset($usuario)) {
                          echo '<button class="btn btn-danger my-2 my-sm-0 btn-sm" style="display: block;" type="submit">LOG OUT</button>';
                        } else {
                          echo '<a class="btn btn-success my-2 my-sm-0 btn-sm" href="loginView.php">LOGIN</a>';
                        }
                      ?>
                    </form>
              </div>
          </div>
      </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1 style="color: #C085DA;">Trabajos Realizados</h1>
                            <span class="subheading">Revisa la experiencia de nuestro servicio</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-10">
                      
                      <section class="typography-1">
                        <div class="photos photos-padding-l" style="">
                          <div class="photos-overlay" style="background-color:rgba(255,255,255,0)">
                            <div class="container">
                              <div class="row row-grid">
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/16.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <center>
                                    <figcaption class="figure-caption">Acabado de uñas esculturales Rojo / Negro</figcaption>

                                    </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/13.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <center>
                        <figcaption class="figure-caption">Peinado de Boda</figcaption>

                        </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/3.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <center>
                          <figcaption class="figure-caption">Peinado de XV años</figcaption>
                        
                          </center>
                                  </figure>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>

                      <section class="typography-1">
                        <div class="photos photos-padding-l" style="">
                          <div class="photos-overlay" style="background-color:rgba(255,2551,255,0)">
                            <div class="container">
                              <div class="row row-grid">
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/15.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <center>
                                    <figcaption class="figure-caption" style="">Acabado de uñas acrilico Nego / Blanco</figcaption>

                                    </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/5.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <center>
                          <figcaption class="figure-caption">Acabado de uñas acrilico Nego</figcaption>

                          </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/14.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <center>
                        <figcaption class="figure-caption">Acabado de uñas acrilico Nego / Blanco</figcaption>

                        </center>
                                  </figure>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>

                      <section class="typography-1">
                        <div class="photos photos-padding-l" style="">
                          <div class="photos-overlay" style="background-color:rgba(255,255,255,0)">
                            <div class="container">
                              <div class="row row-grid">
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/1.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <center>
                          <figcaption class="figure-caption">Acabado de uñas acrilico Coral / Beige</figcaption>

                          </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/11.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <center>
                          <figcaption class="figure-caption">Decoloración de luces</figcaption>

                          </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/9.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <center>
                          <figcaption class="figure-caption">Acabado de uñas acrilico Coral</figcaption>

                          </center>
                                  </figure>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>

                      <section class="typography-1">
                        <div class="photos photos-padding-l" style="">
                          <div class="photos-overlay" style="background-color:rgba(255,255,255,0)">
                            <div class="container">
                              <div class="row row-grid">
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/10.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <center>
                        <figcaption class="figure-caption">Peinado de Fiesta</figcaption>

                        </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/3.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                        <center>
                        <figcaption class="figure-caption">Peinado de XV años</figcaption>

                        </center>
                                  </figure>
                                </div>
                                <div class="col-xs-12 col-md-4 my-1">
                                  <figure class="figure">
                                    <img src="assets/img/Servicios/Galeria/12.jpg" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <center>
                          <figcaption class="figure-caption">Permacologia</figcaption>

                          </center>
                                  </figure>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>

                      

                    </div>
                </div>
            </div>
        </main>

        <section class="pt-5 pb-5">
          <div class="container ">
            <div class="row d-md-flex-row   ">
              <div class="col-md-5 ms-md-0 col-12   d-flex  ">
                <div class="card p-0   w-100 h-100 text-light shadow-lg  border-0 ">
                  <img class="card-img h-100 w-100" src="assets/img/Servicios/Referencias/Vivis.jpeg" alt="Card image">
                  <div class="card-img-overlay p-1 p-md-3    ">
                    <div class="position-relative  w-100 h-25  d-flex">
                      <div class="container-fluid align-self-start   mt-2 mb-2">
                        <div class="row">
                          <div class="col-7 col-md-5">
                            <h4 class="mt-1 text-dark">Vivi Cruz</h4>
                          </div>
                          <div class="col-md-7 col-5 text-right">
                            <div class="row align-items-center">
                              <div class="col-12 align-self-center">
                                <hr class="border border-border-light mt-3">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="position-relative  w-100 h-50  d-flex">
                      <div class="container-fluid align-self-center   mt-5 mb-2">
                        <div class="row h-100 align-items-center">
                          <div class="col-12">
                            <h2 class="   text-end pt-md-2 pt-sm-4 text-white">
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="position-relative  w-100  h-25 d-flex">
                      <div class="container-fluid p-0 m-0 align-self-end  mt-5 mb-2">
                        <div class="row">
                          <div class="col-md-7 col-7">
                            <div class=" pt-0 d-inline-block">
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                            </div>
                          </div>
                          <div class="col-md-5 col-5 text-end">
                            <a href="post.html" class="btn btn-outline-light">Agenda tu Cita</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 h-100">
                <div class="container-fluid w-100">
                  <div class="row">
                    <div class="col col-12 text-center text-md-start">
                      <h2 class="pt-4 pt-md-0" style="color: #361750;"> Referencias de nuestros clientes</h2>
                      <p class="text-h3">Estos son algunos de nuestros clientes mas frecuentes
                        y ellos son los mejores para contarte como podemos tratarte y darte todo lo que mereces. <br>
                        <br>
                        <a href="post.html" class="btn btn-outline-dark">Agenda tu Cita</a>
                      </p>
                    </div>
                  </div>
                  <div class="row align-content-center">
                    <a class="card p-2 col-md-6  no-gutters text-light  border-light " data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img class="card-img h-100 shadow" src="https://images.unsplash.com/photo-1519415387722-a1c3bbef716c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image">
                      <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid h-25">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <h5 class="text-white mt-2 mb-2">Diana</h5>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">18 años</h5>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid  h-50  text-center">
                          <div class="row h-100 align-items-center">
                            <div class="col-12">
                              <h3 class="text-white  mt-3 mb-3">
                                <small></small>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid h-25  ">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="mt-2 mb-2 text-white">Depilado de Ceja</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="card p-2 col-md-6  no-gutters text-light  border-light" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img class="card-img h-100 shadow" src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="Card image">
                      <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid h-25">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <h5 class="text-white mt-2 mb-2">Luz</h5>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">23 años</h5>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid  h-50  text-center">
                          <div class="row h-100 align-items-center">
                            <div class="col-12">
                              <h2 class="text-white  mt-3 mb-3">
                                <small> </small>
                              </h2>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid h-25  ">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">Tinte de Cabello</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="card p-2 col-md-6  no-gutters text-light  border-light" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img class="card-img h-100 shadow" src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image">
                      <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid h-25">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <h5 class="text-white mt-2 mb-2">Jenny</h5>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">22 años</h5>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid  h-50  text-center">
                          <div class="row h-100 align-items-center">
                            <div class="col-12">
                              <h2 class="text-white  mt-3 mb-3">
                                <small> </small>
                              </h2>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid h-25  ">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">Uñas acrilicas</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="card p-2 col-md-6  no-gutters text-light  border-light" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img class="card-img h-100 shadow" src="https://images.unsplash.com/photo-1634302086887-13b5585a8831?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image">
                      <div class="card-img-overlay p-1 d-flex  flex-column  align-items-baseline justify-content-center ">
                        <div class="container-fluid h-25">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <h5 class="text-white mt-2 mb-2">Erick</h5>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">18 años</h5>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid  h-50  text-center">
                          <div class="row h-100 align-items-center">
                            <div class="col-12">
                              <h2 class="text-white  mt-3 mb-3">
                                <small></small>
                              </h2>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid h-25  ">
                          <div class="row h-100 align-items-center">
                            <div class="col-6">
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                              <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="col-6 text-end">
                              <h5 class="  mt-2 mb-2 text-white">Corte de Cabello</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Footer-->
        <footer class="pt-4 pb-4 ">
          <div class="container">
            <div class="row text-center align-items-center">
              <div class="col-12 col-sm-6 col-md-4 text-sm-start">
                <img alt="image" src="assets/img/LogoIzq.png" height="70">
              </div>
              <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0 text-center text-sm-end text-md-center">
                © Todos los derechos reservados 2022
              </div>
              <div class="col-12 col-md-4 mt-4 mt-md-0 text-center text-md-end">
                <a href="https://wa.me/4271171624">
                <img src="https://img.icons8.com/office/64/000000/whatsapp--v1.png"/>
                </a>&nbsp;&nbsp;
                <a href="https://www.facebook.com/angeles.cruzz.31704">
                <img src="https://img.icons8.com/color/64/000000/facebook.png"/>                
                </a>&nbsp;&nbsp;
                <a href="https://www.instagram.com/angeles.cruz.1317/?hl=es-la">
                  <img src="https://img.icons8.com/fluency/64/000000/instagram-new.png"/>
                </a>&nbsp;&nbsp;
              </div> 
            </div>
          </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
