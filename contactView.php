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
        <title>Contacto</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
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
        <header class="masthead" style="background-image: url('https://images.unsplash.com/uploads/1413222992504f1b734a6/1928e537?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1 style="color: #8946a6;">Contacto</h1>
                            <span class="subheading"  style="color: #ffffff;">Ve un poco sobre la experiencia de la Estilista y la ubicación de el establecimiento</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        
        <div class="text-center">
          <!-- Button HTML (to Trigger Modal) -->
          <a href="#myModal" class="trigger-btn" data-toggle="modal" style="display: none;">Click to Open Success Modal</a>
        </div>
        
        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
          <div class="modal-dialog modal-confirm">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
                <div class="icon-box">
                  <i class="material-icons">&#xE876;</i>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body text-center">
                <h4>Great!</h4>	
                <p>Your account has been created successfully.</p>
                <button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i class="material-icons">&#xE5C8;</i></button>
              </div>
            </div>
          </div>
        </div>    
        

                    <section class="pt-2 pb-0">
                      <div class="container-fluid m-0 ">
                        <div class="row d-md-flex-row  overflow-hidden">
                          <div class="col-md-5  p-0 col-12 bg-light d-flex overflow-hidden ">
                            <div class="card p-0   w-100 h-75 text-light   border-0 ">
                              <img class="card-img" height="108%" src="assets/img/Estilista/Estilista.jpeg">
                              <div class="card-img-overlay p-1 p-md-3    ">
                                <div class="position-relative  w-100 h-25  d-flex">
                                  <div class="container-fluid align-self-start   mt-2 mb-2">
                                    <div class="row">
                                      <div class="col-5 col-md-3">
                                        <h4 class="mt-1 text-white fw-bold">Estilista</h4>
                                      </div>
                                      <div class="col-md-9 col-7 text-right">
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
                                    <div class="row">
                                      <div class="col-12">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="position-relative  w-100  h-25 d-flex">
                                  <div class="container-fluid align-self-end  mt-5 mb-2">
                                    <div class="row">
                                      <div class="col-md-6 col-7">
                                        <div class=" pt-0 d-inline-block">
                                          <a href="https://www.facebook.com/angeles.cruzz.31704" role="button" class=" btn btn-link me-2">
                                            <i class="fab fa-facebook fa-lg text-light" aria-hidden="true"></i>
                                          </a>
                                          <a href="https://wa.me/4271171624" role="button" class=" btn btn-link me-2">
                                            <i class="fab fa-whatsapp fa-lg text-light" aria-hidden="true"></i>
                                          </a>
                                          <a href="https://www.instagram.com/angeles.cruz.1317/?hl=es-la" role="button" class=" btn btn-link me-2">
                                            <i class="fab fa-instagram fa-lg text-light" aria-hidden="true"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-5 text-end">
                                        <a href="#" class="btn btn-outline-light">Ver mas de Mi</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-7  pb-5 overflow-hidden bg-light">
                            <div class="container-fluid p-md-1 d-flex align-items-center h-100">
                              <div class="row justify-content-center align-items-center h-100">
                                <div class="col-md-12  pt-5 pt-md-1 pb-5 overflow-hidden bg-light">
                                  <div class="container-fluid p-md-5 d-flex  h-100">
                                    <div class="row justify-content-md-start align-items-center">
                                      <div class="col-md-12">
                                        <h3 class="small">M A R I A / C V</h3>
                                        <h2 class="  mb-5 pt-md-2 pt-sm-4" style="color: #4b215e;">Soy una Estilista
                                          <br>Experimentada &amp; Enfocada
                                        </h2>
                                        <p>Una estilista dedicada a su trabajo, con pasión por lo que hace y profesionalismo en cada uno de sus servicios. <br><br> 
                                          Disfruta la compañia de sus seres queridos y realizar el trabajo que le gusta, es una persona con una ambicion de 
                                          crecer y mejorar tanto profesionalmente como personalmente. 
                                        </p>
                                      </div>
                                      <div class="col-12 col-md-12 pt-md-2">
                                        <h5 class="mt-md-4 mb-3 small text-uppercase">Habilidades
                                        </h5>
                                        <div class="progress mb-3 mt-2">
                                          <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #8946a6;">
                                            <span class="stacked-label">Uñas</span>
                                          </div>
                                        </div>
                                        <div class="progress mb-3 mt-2">
                                          <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #8946a6;">
                                            <span class="stacked-label">Maquillaje</span>
                                          </div>
                                        </div>
                                        <div class="progress mb-3 mt-2">
                                          <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #8946a6;">
                                            <span class="stacked-label">Peinado</span>
                                          </div>
                                        </div>
                                        <div class="progress mb-3 mt-2">
                                          <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #8946a6;">
                                            <span class="stacked-label">Corte de Cabello</span>
                                          </div>
                                        </div>
                                        <div class="progress mb-3 mt-2">
                                          <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #8946a6;">
                                            <span class="stacked-label">Tinte</span>
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
                      </div>
                    </section> <br>
                      
                    <section class="pb-5 pt-0">
                      <grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                      <div class="container-fluid p-0 pb-md-5">
                        <iframe class="map" src="https://maps.google.com/maps?q=20%C2%B027'59.8%22N%2099%C2%B059'10.7%22W&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                      </div>
                      <div class="container">
                        <div class="row mt-5">
                          <div class="col-12 col-md-6 col-lg-5">
                            <h2>Contactame</h2>
                            <p class=" ">Tienes alguna sugerencia para la pagina, alguna opinion sobre tu servicio
                              o algo que creas que es necesario que sepamos, mandanos un correo rellenando los siguientes
                              datos y con gusto te atenderemos. Si es necesario aqui tienes los siguientes datos de contacto
                            </p>
                            <p class=" mt-5">
                              <strong>Email:</strong>
                              <a href="">mari.cruz170400@gmail.com</a>
                            </p>
                            <p class=" ">
                              <strong>Phone:</strong>
                              <a href="https://wa.me/4271171624">+52 427 117 1624</a>
                            </p>
                          </div>
                          <div class="col-12 col-md-6 ms-auto pt-5 pt-md-0">
                            <form>
                              <div class="row">
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Nombre">
                
                                </div>
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Apellidos">
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col">
                                  <input type="email" class="form-control" placeholder="Email">
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col">
                                  <input type="email" class="form-control" placeholder="Titulo">
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col">
                                  <textarea class="form-control border border-secondary" name="message" rows="3" placeholder="Como podemos ayudarte?" style="" spellcheck="false"></textarea>
                                </div>
                              </div>
                              <div class="row mt-4">
                                <div class="col">
                                  <button type="submit" style="background-color: #8946a6" class="btn">Enviar</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </section>

     
        <!-- Footer-->
        <footer class="pt-4 pb-4 ">
          <div class="container">
            <div class="row text-center align-items-center">
              <div class="col-12 col-sm-6 col-md-4 text-sm-start">
                <img alt="image" src="assets/img/LogoIzq.png" height="40">
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
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
