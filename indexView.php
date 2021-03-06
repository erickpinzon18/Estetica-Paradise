<?php
  session_start();
  $usuario = $_SESSION['dev'];
  $type = $_SESSION['type'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Paradise</title>
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
                                echo '"indexView.php"';
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
        <header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1595475884562-073c30d45670?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=1200')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                          <center>
                            <img alt="image" src="assets/img/LogoOG.png" height="300">
                            <span class="subheading"><h3>El paraiso de tus sueños</h3></span>
                          </center>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        

        <main class="mb-4">
            <div class="container px-2">
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-10">
                          <section class="pt-5 pb-5">
                            <div class="container">
                              <center><h1 style="color: #361750;">Redes Sociales</h1></center>
                              <div class="container">
                                <div class="row text-center">
                                  <div class="col">
                                  </div>
                                </div>
                                <div class="row justify-content-center  d-flex text-center mt-5">
                                  <div class="col-md-4 col-feature">
                                    <a href="https://facebook.com">
                                      <div class=" rounded-circle justify-center border border-secondary d-inline-block p-4 mb-4">
                                        <em class="fa fa-2x fa-book text-dark "></em>
                                      </div>
                                    </a>
                                    <h4 style="color: #361750;">Facebook </h4>
                                    <p>Puedes contactarnos tambien por facebook, y mandarnos mensaje o saber algo mas sobre nuestra estetica</p>
                                  </div>
                                  <div class="col-md-4 col-feature">
                                    <a href="https://instagram.com">
                                      <div class=" rounded-circle justify-center border border-secondary d-inline-block p-4 mb-4">
                                        <em class="fa fa-2x fa-camera text-dark"></em>
                                      </div>
                                    </a>
                                    <h4 style="color: #361750;">Instagram</h4>
                                    <p>Si necesitas mas información sobre la estilista, o ver unos cuantros trabajos mas que ha realizado visita su Instragram</p>
                                  </div>
                                  <div class="col-md-4 col-feature">
                                    <a href="https://WhatsApp.com">
                                      <div class=" rounded-circle justify-center border border-secondary d-inline-block p-4 mb-4">
                                        <em class="fa fa-2x fa-phone text-dark"></em>
                                      </div>
                                    </a>
                                    <h4 style="color: #361750;">WhatsApp</h4>
                                    <p>Si tienes alguna duda mas inmediata o alguna aclaracion puedes contactar a la estilista por whatsapp dando click aquí</p>
                                    <p>
                                    </p>
                                  </div>
                                </div>
                              </div> <br>

                              <div class="row">
                                <div class="col-6">
                                  <h3 class="mb-3" style="color: #361750;">Acerca de Nosotros</h3>
                                </div>
                                <div class="col-6 text-md-end">
                                  <a class="btn mb-3 me-1" style="background-color: 8946a6;" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                  </a>
                                  <a class="btn  mb-3 " href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                  </a>
                                </div>
                                <div class="col-12">
                                  <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <div class="row">
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1542125387-c71274d94f0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">Acerca de Nosotros</h4>
                                                <p class="card-text">Somos una estetica preparada para satisfacer a cualquier cliente y cubrir sus necesidades</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1520489795518-73d3d7be02e3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=978&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">Creada para ti</h4>
                                                <p class="card-text">Nos gusta concentirte y es por eso que todas nuestras instalaciones estan hechas para tu comodidad</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=915&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">SOLO POR HOY!</h4>
                                                <p class="card-text">Tenemos Agenda tu cita el dia de hoy y conseguiras un 10% de descuento <a href="post.html">Click aquí para continuar</a></p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="row">
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1542125387-c71274d94f0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">Consulta nuestro catalogo</h4>
                                                <p class="card-text">Podras ver todo lo que tenemos para ofrecerte en la parte de abajo de esta sección</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1633613286848-e6f43bbafb8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">¿Necesitas Referencias?</h4>
                                                <p class="card-text">En la pestaña de <a href="about.html">Trabajos Realizados</a> podrás visualizar algunos trabajos y clientes satisfechos</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1528747045269-390fe33c19f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">¿Quieres ver quien es la Estilista?</h4>
                                                <p class="card-text">Conoce todo sobre ella, su experiencia y la ubicacion de la estetica en el sigunte <a href="contact.html">LINK</a></p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="row">
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                              <div class="card-body">
                                                <h4 class="card-title">Enfocada a mujeres</h4>
                                                <p class="card-text">Si bien la estetica es una estetica unisex, la mayor parte de nuestros servicios son para las mujeres</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                              <div class="card-body">
                                                <h4 class="card-title">Cuidamos tu piel</h4>
                                                <p class="card-text">Porque sabemos que tu piel es muy importante, utilizamos los mejores productos avalados cientificamente</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                              <div class="card-body">
                                                <h4 class="card-title">Los servicios que necesitas</h4>
                                                <p class="card-text">Cubrimos todas tus necesidades, tanto un corte casual, como un peinado de salon y listo para una fiesta</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <center><h1 style="color: #361750;">Redes Sociales</h1></center>
                          <section class="pt-5 pb-5">
                            <div class="container">
                              <div class="row align-items-center justify-content-around">
                                <div class="col-12 col-md-4   ">
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small">
                                      <h5 class="mt-0 mb-1">Uñas de Acrílico</h5>
                                      Haz lucir tus bellas manos con las uñas de acrilico que tenemos para ti
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small">
                                      <h5 class="mt-0 mb-1">Cabello Pintado</h5>
                                      Descubrete, crea un nuevo look y pinta tu cabello de distintas formas
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small">
                                      <h5 class="mt-0 mb-1">Peinado</h5>
                                      ¿Evento importante? Ven y nosotros te realizamos un peinado listo para la fiesta!
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small">
                                      <h5 class="mt-0 mb-1">Skin Care</h5>
                                      Mal cuidado de la piel, aqui te concentimos como lo mereces y cuidamos de tu piel
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                  </div>
                                </div>
                                <div class="col-12 col-md-4   mt-4 mt-md-0">
                                  <img alt="image" class="d-none d-md-block img-fluid mx-auto  rounded" src="https://images.unsplash.com/photo-1560869713-7d0a29430803?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=326&q=80">
                                </div>
                                <div class="col-12 col-md-4">
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1">Manicure</h5>
                                      ¿Tus manos estan muy dañadas? Ven con nosotros, tenemos los mejores tratamientos
                                    </div>
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1">Pedicure</h5>
                                      ¿No tienes los pies que deseas? Ven, tambien cuidamos de la imagen y limpieza de ellos
                                    </div>
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1">Corte de Cabello</h5>
                                      ¿Cabello muy largo o nuevo look? Tenemos todo lo necesario para que salgas como lo habias planeado
                                    </div>
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src=" https://dummyimage.com/64x64/8946a6/fff" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1">Otros</h5>
                                      Estos y muchos mas unicamente en la estetica PARADISE
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
        


        <!-- Footer-->
        <footer class="pt-4 pb-4 ">
          <div class="container">
            <div class="row text-center align-items-center">
              <div class="col-12 col-sm-6 col-md-4 text-sm-start">
                <img alt="image" src="assets/img/LogoIzq.png" height="50">
              </div>
              <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0 text-center text-sm-end text-md-center">
                © Todos los derechos reservados 2022
              </div>
              <div class="col-12 col-md-4 mt-4 mt-md-0 text-center text-md-end">
                <a href="https://wa.me/4271171624">
                  <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;
                <a href="https://www.facebook.com/angeles.cruzz.31704">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;
                <a href="https://www.instagram.com/angeles.cruz.1317/?hl=es-la">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;
              </div> 
            </div>
          </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
