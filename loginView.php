<?php
    include("modules/login.php");
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
        <title>Generador de Citas</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
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
        <header class="masthead" 
        style="background-image: url('https://images.unsplash.com/photo-1595475884562-073c30d45670?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=1200')">
        <div class="container px-2">
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-10">
                        <section class="pt-5 pb-5" style=" ">
                          <div class="container">
                            <div class="row   justify-content-center header-h100 align-items-center">
                              <div class="col-12 col-md-5 text-center">
                                <div class="card shadow">
                                <article class="card-body">
                                  <img alt="image" src="assets/img/LogoOG.png" height="100">
                                  <h2 class="card-title text-center mb-4 mt-1 fw-bold" style="color: #361750;">Iniciar Sesion
                                  </h2>
                                  <hr>
                                  <p class="text-center" style="color: #361750;">Inicia sesion para continuar</p>
                                  <form name="modalLogin" action="modules/login.php" method="POST">
                                    <div class="form-group">
                                      <div class="input-group mb-3">
                    
                                        <span class="input-group-text"> <i class="fa fa-user"></i>
                                        </span><input id="user" class="form-control" placeholder="Email or login" name="user" type="text">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="input-group mb-3">
                    
                                        <span class="input-group-text"> <i class="fa fa-lock"></i>
                                        </span><input id="password" class="form-control" placeholder="******" name="password" type="password">
                                      </div>
                                    </div>
                                    <script>
                                    
                                    </script>
                                    <div class="form-group">
                                      <button href="#myModalAdmin" data-dismiss="modal" class="trigger-btn" data-toggle="modal" style="display: none;" id="adminModal">Se dara click automaticamente</button>
                                      <button href="#myModalAdmin1" data-dismiss="modal" class="trigger-btn" data-toggle="modal" style="display: none;" id="adminModalDef">Se dara click automaticamente</button>
                                      <input type="submit" name="btnLogin" class="btn-lg w-100"  style="background-color: #8946a6; color: white;">
                                    </div>
                                    <?php
                                        echo $fila["password"];
                                      ?>
                                      <a href="#myModalRegister" class="trigger-btn" data-toggle="modal" style="color: #8946a6; font-size: large;">Registrarse</a>
                                  </form>
                                </article>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Modal HTML -->
        <div id="myModalRegister" class="modal fade">
          <div class="modal-dialog modal-confirm" style="background-color: #fff;">
            <div class="modal-content">
              <article class="card-body">
                <h2 class="card-title fw-bold   mb-4 mt-1">Sign up</h2>
                <form name="modalRegister" action="modules/register.php" method="POST">
                <div class="form-group">
                    <label>Usuario</label>
                    <input name="Rusuario" class="form-control mt-2" placeholder="Usuario" type="text">
                  </div>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input name="Rnombre" class="form-control mt-2" placeholder="Nombre" type="text">
                  </div>
                  <div class="form-group mt-2">
                    <label>Telefono</label>
                    <input name="Rtel" class="form-control mt-2" placeholder="Telefono" type="number">
                  </div>
                  <div class="form-group mt-2">
                    <label>Contraseña</label>
                    <input class="form-control" placeholder="******" type="password" id="pass1">
                  </div>
                  <div class="form-group mt-2">
                    <label>Repita la Contraseña</label>
                    <input id="pass2" class="form-control mt-2" placeholder="******" type="password" name="Rpass" 
                        onchange=" //Verificar que las contraseñas coincidan
                            if(document.getElementById('pass1').value != document.getElementById('pass2').value) {
                                alert('Las contraseñas no coinciden');
                                document.getElementById('pass2').value = '';
                            }
                        ">
                  </div>
                  <div class="form-group mt-2">
                    <label>Fecha de Nacimiento</label>
                    <input id="fech" class="form-control mt-2" type="date" name="Rfec">
                  </div>
                  <div class="form-group mt-2">
                                        <label for="Mes" class="form-label">Genero</label>
                                        <select class="form-select" id="Genero" name="Rgenero" required>
                                          <option value="Mujer">Mujer</option>
                                          <option value="Hombre">Hombre</option>
                                          <option value="0" selected>Elige tu genero</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Por favor escoge el genero
                                        </div>
                                      </div>
                                      <div class="form-group mt-2">
                    <label>Email</label>
                    <input id="Remail" class="form-control mt-2" type="text" name="Remail" placeholder="ejemplo@dominio.com">
                  </div>
                  <div class="form-group mt-3">
                    <input type="submit" name="btnLogin" class="w-100" style="background-color: #8946a6; color: white;">
                  </div>
                </form>
              </article>
            </div>
          </div>
        </div> 
</header>
          

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
</footer>
</html>
