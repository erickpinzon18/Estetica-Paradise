<?php
  error_reporting(0);
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
        <header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1595475884562-073c30d45670?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=1200')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                          <center>
                            <img alt="image" src="assets/img/LogoCirc.png" height="300">
                            <h2 class="lead"><h2 class="lead">El paraiso de tus sueños</h2></span>
                          </center> <br><br><br><br><br><br>
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
                              <center>
                        <h1 style="color: #361750;">Acerca de Nosotros</h1>

                        </center>
                              <div class="row">
                                <div class="col-6">
                        
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
                                                <p class="card-text" style="text-align: justify;">Somos una estetica preparada para satisfacer a cualquier cliente y cubrir sus necesidades</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1520489795518-73d3d7be02e3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=978&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">Creada para ti</h4>
                                                <p class="card-text" style="text-align: justify;">Nos gusta concentirte y es por eso que todas nuestras instalaciones estan hechas para tu comodidad</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1522134239946-03d8c105a0ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">Cuidamos de Ti</h4>
                                                <p class="card-text" style="text-align: justify;">Si necesitas cuidado tannto de piel como de manos o pies puedes <a href="post.html">Generear una cita aquí </a>y nosotros lo haremos por ti</p>
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
                                                <p class="card-text" style="text-align: justify;">Podras ver todo lo que tenemos para ofrecerte en la parte de abajo de esta sección</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1633613286848-e6f43bbafb8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">¿Necesitas Referencias?</h4>
                                                <p class="card-text" style="text-align: justify;">En la pestaña de <a href="about.html">Trabajos Realizados</a> podrás visualizar algunos trabajos y clientes satisfechos</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1528747045269-390fe33c19f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                                              <div class="card-body">
                                                <h4 class="card-title">¿Quieres ver quien es la Estilista?</h4>
                                                <p class="card-text" style="text-align: justify;">Conoce todo sobre ella, su experiencia y la ubicacion de la estetica en el sigunte <a href="contact.html">LINK</a></p>
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
                                                <p class="card-text" style="text-align: justify;">Si bien la estetica es una estetica unisex, la mayor parte de nuestros servicios son para las mujeres</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                              <div class="card-body">
                                                <h4 class="card-title">Cuidamos tu piel</h4>
                                                <p class="card-text" style="text-align: justify;">Porque sabemos que tu piel es muy importante, utilizamos los mejores productos avalados cientificamente</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3">
                                            <div class="card">
                                              <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                              <div class="card-body">
                                                <h4 class="card-title">Los servicios que necesitas</h4>
                                                <p class="card-text" style="text-align: justify;">Cubrimos todas tus necesidades, tanto un corte casual, como un peinado de salon y listo para una fiesta</p>
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
                          <center><h1 style="color: #361750;">Servicios</h1></center>
                          <section class="pt-5 pb-5">
                            <div class="container">
                              <div class="row align-items-center justify-content-around">
                                <div class="col-12 col-md-4   ">
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small" style="text-align: right;">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Uñas de Acrílico</h5>
                                        Haz lucir tus bellas manos con las uñas de acrilico que tenemos para ti
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAADdElEQVR4nO2azUsVURiHHz/KVCyRSrOgpO9FFBW1cFFLFy4qKGlREEJ/REn/QiVt3LSNFhkF7WpXJASFumhRUYFffVJq5S3LFmfUO+8d5865vmdG8Txwubz33vN7f/POOTNzzj3g8Xg8Ho9npVKWQo5tQDtwGGgBNgIbgAqgPvjNN+Av8An4CLwFngEPgHcpeHRCC9ALTAMzJb6mgTuB1rLiLDBJ6QcuXxNAR6pHsAjOY7qz1sHn94Zz2ma1rwH7gT5gjfi8H7gdvI8AY0AOM/bBXAuqgCagOdDpCN7zmQKOAIPKvtV4Qvis5YCLlFbosqBtTmg+VnHqgOMUdluNcdsRoXtMQVedG4RN9ipq3xXa3YraagwSNtmmqN0mtAcUtdX4Sthkg6J2g9D+oqitxj/CJjXvMGVC+5+msBYzDrWd6ZdriCxnfAGyNpA1GgWoAK4r6NjSA1RmkDdEOeYZP2ryok1Ujltk3IuvRZhKswAzwFUHuRLRHmMqzQLMACcc5IulHjOtXSoFGAbWOci5IFeEgV8RprSR+jJnl4OckdRgFi7zk1+OMKiN1O8S8Weg1kHeAjpF4hHMak7aBaiicBh22oqWcgs5JeJuzKpN2uQoXBc46TppHYVjb3bJOu0eALCV8Cx0CljrIPccZ4SJ50UMarKQ/gvx+WkbUdsh0Crie5btXXBfxNJjLLYFOCTip5btXdAn4oOuEpUD44S7W2Pe91kNgUbx+QSO5ge7RaLhhAa1iNMfFd/tTCpqU6k9Il5KK7P9It6btKFNAbaIeCn9bf1exM1JG9oUYJOIRy3aukZ6kV4XZDEFGLFo6xpZACc9QIquuB7QKOIPFm1dMybipqQNbQpQLeLJIr+/gMXtKIZdgVYcEyKuSSpus6paJeKpIr+/GbyPYfYN9AOvgTeYuft35o3XYVZ01gPbgR2YzRGtJDubcjYqvaogHzaksbglKxevfDaL74aSHpTNEFgt4t8i7qFwLLpgLMiVj+yNcouOCnLXV9TyUzlwFLNE9gj4yeLP9A/gIXAp0I46abWiTbHr0xw2/7D+IXzNWIXZuRVHBeYitg84gHlEbcY8VVYzv3gxjlloGcLMMV5irhkDwCvMrrM4KgN/s0wH/opiUwA57tLYZWpDSf78n6NZG8gaX4CsDWTNii+Ax+PxeDyelct/gTKlWen1JKwAAAAASUVORK5CYII=" alt="Generic placeholder image">
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small"  style="text-align: right;">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Permacologia</h5>
                                      Descubrete, crea un nuevo look y pinta tu cabello de distintas formas
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src="data:image/png;base64,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" alt="Generic placeholder image">
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small"  style="text-align: right;">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Peinado</h5>
                                      ¿Evento importante? Ven y nosotros te realizamos un peinado listo para la fiesta!
                                    </div>
                                    <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAFiklEQVRoge2afWjWVRTHP3u22bKellq2tRwUS8rSik3MGjXCFEctLCQjMKggqFYhZkUkg0jT7M1ejMD+CNTKIIjKWi8WraKyjPVuxWhqVL4V2tbc3K8/zrnd+/z2e32eZ1uBX/hxec499/zO997zO/fcu5VSPFQDzUC9/v6tiLZHBGXAKuAg4DnPZqBmFP1KhXLgRcTxAWATsAHYrbLvgYpR8y4hXBJ7gUanbyLwmfZdP/KuJYefRH2AziLtfwkoGTnXkiMJCYCHsN/Lk/zHyCQlkQF+VL1+hpIZO7xuRiMpCYAFqvc1MAfowZIBqASeBo4aLmfDkIZEFuhW3atVdjGWzJkq+wL4BGhAksOwIw0JgHXYb+MboErlM4HFSNiBzWrm6QZWA3VF9P1fpCVxp+ruAb7EkhkfoFuFZLSvgD+whPqBJRQxOaQlcSMwiOzwFwHHIeHjAfNjxmaA6cAzwCEd8xx29fJGGhIZ4D7sjPYBl2pfJdCi9pKiCVlRT+3mjTQkaoE3VbcHCRVDpqkAH2YAvcgKN8boBiKMxEnAXGzc1iCzdQDr+AztW6WyO/JxwMEytfNu2oFhJOqAHSr/CSkEB7Efpkmra7ExfRqFx3cW+F1tTy8miV5y0+Xr6vCF2JW5N4Wj1yD7SxQeVbsrkhpdQTSJzcgMTQW2qGwb9rzRpGMfSPi+07EZbkGEXiM2hceiDAmPfuwS+km4pcQ4gsmkgVl9E55zQvQqELIDJKjPxiK5e786OTmChIFL5sM0DIB5Om47Um95yEGsOkTfbKxx+xgg8e4B+7Afr0ticsCYccCrSFmRFLOBv7CbZAZ4RX9vDBnzlvY3J3lBDfAO9si6FkviWmSXLQQVQBu2pF/pe/c+5JsJyk7P65ir0rxwPLmh1ICE3aY0RhzUAUuRMPIQZ1cyNDUv1v51ATbWkwcRP85SI1sS6k8EFgLPYkt583QSnm4rkZDuAY719ZnQuySN435MUCO7YvRagDewBZ95diO3KnOJ3yBf1jHzfPKPVT4zjeNBMB/n0QF9tQgB43iv/l4EnE263d1cVvj3ol9UPimV1wH4Tg1N8clPREoWD/gVuA3JZPliltpqd2TlyCoPIPtdQTDVrbtplSLHVA94DYnxQjFF7W11ZLUq2xE3OAnLndpWObLLkFS5Dbgc+DuJpzH4U9sJjsxUDTuJQZIYNi9wSV+h7SPkkliGFJBRB6IwndIAn7LaxiWbREQO+V4EME3brT7dVmQfao2wF6ZjVmK/IxvU9mCck0mImGzlObJjtPX/6WA1MttRZUuYzgnaumFkiGQpAtoZWuuYTHZOMV6gMDcwaxzZNOytfiTiViSD7O4A3zpyM2thFWs+MHVWhyP7AanP6ojJjHFE6pGyoxvocuSd2p6b2M1ojEGukDzgbUfeixwTMkj1kDfWqPGHffLZ5HcWCUMzth7z4ybtez9f49VIETcInOHrOwLJLoPIsbVQvIA4e3dAXxZ7Exl2kozERh28IaT/Ce1/Kh/jDiYh30EfNnP5YeqwLlJmsPOxheASgv8OeIo60E9hq2KOu+tD+jNI9dxHHrePJwM/Y8nsBR5HbkvGOHqPaf+nPnlSTEUKwgFyJ6MMOA+phM39gYdU4nH3yENwJHADclvunjEOIHvL/cB1yLfiAQ+mtF+CLUjbgSuB5cj9gbFpnu3APeTWe6lRghx525CZN7eMQc/NKey2RtjxkJv85cAF5JZHoU6mRRVyWmtANstTkVAsR0guJPjs7WI+kkRKkTqqC9n8OoHPgY+QA9WIowxJCubC7XbCJ+lW7H9JLCXBbI8G7sKGXgdy/j4e+aNPC/Ae9jalbZR8TIxZSC0WFvu7KLDcGElkkdKiA7lJ2QN8ANyCPQIcxmH8H/AP14zKaDgtbF0AAAAASUVORK5CYII=" alt="Generic placeholder image">
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex   align-items-center">
                                    <div class="order-2 order-md-1  media-body small"  style="text-align: right;">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Skin Care</h5>
                                      Mal cuidado de la piel, aqui te concentimos como lo mereces y cuidamos de tu piel
                                    </div>
                                    <img class="ml-md-3 ml-4 mr-3 mr-md-0 order-1 img-fluid rounded" src="data:image/png;base64,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" alt="Generic placeholder image">
                                  </div>
                                </div>
                                <div class="col-12 col-md-4   mt-4 mt-md-0">
                                  <img alt="image" class="d-none d-md-block img-fluid mx-auto  rounded" src="https://images.unsplash.com/photo-1560869713-7d0a29430803?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=326&q=80">
                                </div>
                                <div class="col-12 col-md-4">
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src="data:image/png;base64,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" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Manicure</h5>
                                      ¿Tus manos estan muy dañadas? Ven con nosotros, tenemos los mejores tratamientos
                                    </div>
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src="data:image/png;base64,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" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Pedicure</h5>
                                      ¿No tienes los pies que deseas? Ven, tambien cuidamos de la imagen y limpieza de ellos
                                    </div>
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAGpElEQVR4nO2be4jVRRTHP+u6vtZ2lUzKR1m5prkVa0kPSaUtlQIJ7YVEf2RYSQ+oqCChB6GRVJAZVkRkhRo9yFKjqBTKNMnMtFbWzFrfa2viqpvrevvjzDDnPn53f7/f/O5dpf3Cjzl37twzZ85v5syZM+dCJzrRiU78j1FSxL4GAbVADXAB0A+oAOqAacDhIspSNJQAU4FVQBuQCnie6CgBC4kLgbVkD/Y4UA98CzSauv3AtcBIZFac8rgVaMYN+jDwNjCJ9AHeSbaC2oANwPPIUjnlcBvylu2AFgJnBbTtCvxM8NI4ASxB7McpgcuAFkT4FuCOEL8pB8YBNwB3AS8BG0lXxN/A+ALImyh6Altx6/wmT341wKc4JbQAV3vyLChm4YR9NkG+9+KW1H7gzAR5J4ZK4CAi5G9AWcL8Z+KUuyRh3ongYZyAvlM/CEtxhvGSAvURG5sR4XYhlr0QGIEMPgW8WaA+YuEi3NufW+C+Vpt+DgI9kmDYJQEetYpemAC/fHjXlBXAmCQYJqGAsabcDfySAL98WKHocUkw9FVACe5NrPbkFQbbgSZDj0yCoa8CqoD+hl7jySsMUsg5AU4SBYxQ9HpPXmFRZ8rzgW6+zHwVoE9r9Z68wmKvKbsCZ/gyS2IJABwFdnryCos9iu7ny8xXAeeZchvipBQD+xTd4Qqw5/QGX0EioFnRp/ky81XAAFPu8hUkAnTwtKcvMx8FVAC9Db3bV5AI0Aro5cvMRwGDFb3DV5AIOKLoDp0B5yh6u68gEdCi6A5VwNmK/stXkAg4gnOHvZeAz9ldK+BPX0EioAk4HfFCBxax3ywsQnzzxo4Uwhc+M+AKU/6ahCAhMRq5d9gDvI4ERjTGAw+R3zY0I1d1rwLH4goyFBcFeiYuk4i4BmhV/f5EdvB1JbkvWHI96/FwpBYrRqPiMomIT8gexPUZbW5GLlV+V4+9oms1nxvV71+JI0iVYrAyDoOYaMDFA2z/s0L87kPT1m7VZcjFbApojLMN7gQOGXos8AXwAHAxCZzPA1CJs/hfAv8YOk5QpBVYZ+h+cYzgEWA6EgDtAVxnHpCb3e1I0KIO2IJclKw1HYfBECTSfC4SBG1CrtptMscmxPBeZeo1qoEZQHdVV5Ojj1RIWfKiCngNOQe0Z3AWheQ5BncN1oobyHTFazTwBu6+UL/Er/PIoL3VF229jydYD9yNXH1XAw8iOQBrcZ6aRdipWgWUGnob8G/G7+3Vm916uyOhMYsPECN3QD1hZ17iGIyc3FLIvhsGN+Le2Eeq/nNT94f5PEG1m9IOz0wjCAnNgHzoAczD+epjgKcITn/pAkxGcgMstINlZ8DmHN9l2oFIKMQ9Xi0wn/SAaSnwJPA48D0ygP2IQgYgHlx/1f5HYIGhu+N2gC2m3IHs771JXwIDgVtI342GeY0mJLohLmpmUtQGI1A9+Y2kfZoRJekB9FLf67wD69C8o+pW5OGdcwn4zoAhwD1IspMOUR8DXkam/WHgY2SKTwGuRE6S1tg1Ifvy+8h6zfTvo+AHYCIFzn8sMZ0sJTv37wDwArKHt4dK0vfrIESZASDLoq96bJpNIjNgAjCHbP9/I7Lu3yN8xqfPm86H5ozPeU98YRXQBxngNFXXguy7C4DvwkpXYFQgRliPK2+KXRgFDEX8fTutjyJn6bm4a6piob21/Rbt+wVpaE8Bw4BvcPH/VUgu39YonSSIGsRnCLqF2hdQHwtlyH5sDdA8Cpf/kw/aCFpvcAlyKMs0gqWI03Speuz5ILIRfAxn7BYC93sOJCkMMU8utOG8RYsD+ZgFucJlwH2GbkD2+mKjHLicdPd5HbCM9EGlkMPYKBLMT5yKm3IzkmIaEt0QX8Ieiw+R7QcMVt/rrPQGXGzCItZhaKIpTyBeXDHxNBLZtZ5i7xxtGnCzoFzVD0Jih8PDdhZkA6pN2YLs/4XGbOTcUIqzNZsQp6sWcbWDcBB4FPH6ZiMh8UeQ3So26ggfXk7imWT61eH2maauUtXlcoUXqzr73wMdrM27BIJmwDwkwlMa8H3SsDe+2ogdN2V7EZ3WHHToOEeQAuZTnKnf4ShURCgu9MHFbn99Ar63b7vSlCWK1u2OmrIvLr/Y/oVH5xqcFChD3Fl7tJ6PXGHlugmy6fNtiKP2mWo3R7WboerXIF6kPcYvL9xQ4uN2chvKZRnthuPcYf00kD5ruuKyzDOjTyftv9ImI4nXx5Gb4OfInR5fDXyFTPNDyNsdkKNdORJw3YsobTlm8P8BnBMXa57FhQEAAAAASUVORK5CYII=" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Corte de Cabello</h5>
                                      ¿Cabello muy largo o nuevo look? Tenemos todo lo necesario para que salgas como lo habias planeado
                                    </div>
                                  </div>
                                  <div class="media mt-4 pb-3 d-flex align-items-center">
                                    <img class="me-3 img-fluid rounded" src="data:image/png;base64,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" alt="Generic placeholder image">
                                    <div class="media-body small">
                                      <h5 class="mt-0 mb-1" style="color: #361750;">Otros</h5>
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
    </body>
</html>
