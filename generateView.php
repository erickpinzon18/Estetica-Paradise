<?php
  session_start();
  $type = $_SESSION['type'];
  $usuario = $_SESSION['dev'];

  if(isset($usuario)) {
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

      <script>
        function valiDate() {
          var dia = document.getElementById('fech').value;
          var options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
          var objFecha = new Date(dia);
          var diaLet = objFecha.toLocaleDateString("en-US", options);
          diaLet = diaLet.substr(0,2);
          // no se pk dice que el sabado es viernes y el domingo es sabado tons sacamos a los viernes y sabados jeje
          if (diaLet == "Fr" || diaLet == "Sa") {
            alert("No hay citas en fines de semana");
            document.getElementById("fech").value = "dd/mm/aaaa";
          }
        }
        function nameServ() {
          switch(document.getElementById("slcServicio").value) {
            case "1": document.getElementById("servicioNom").value = "Uñas de Acrilico"; break;
            case "2": document.getElementById("servicioNom").value = "Cabello Pintado"; break;
            case "3": document.getElementById("servicioNom").value = "Peinado"; break;
            case "4": document.getElementById("servicioNom").value = "Skin Care"; break;
            case "5": document.getElementById("servicioNom").value = "Manicure"; break;
            case "6": document.getElementById("servicioNom").value = "Pedicure"; break;
            case "7": document.getElementById("servicioNom").value = "Corte de Cabello"; break;
            case "8": document.getElementById("servicioNom").value = "Otros"; break;
          }
        }
    </script>
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
        <header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1558025137-0b406e9cc169?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1 style="color: #8946a6;">Generador de Citas</h1>
                            <h2 class="subheading">Agenda tu cita en linea</h2>
                            <span class="meta">
                                Puedes agendar tu cita para un dia en especifico y sera notificada inmediatamente la estilista
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content--> 
        
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10">
                      <form action="modules/generate.php" method="post">
                        <section class="pt-5 pb-5 bg-light">
                            <div class="container px-md-5">
                              <div class="py-5 text-center row justify-content-center">
                                <div class="col-md-10">
                                  <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded  mb-4" src="assets/img/LogoOG.png" alt="Generic placeholder image">
                                  <h2>Genera tu Cita</h2>
                                  <p class="lead">Cansado de tener que ir hasta el salon para poder generar tu cita? <br> 
                                    Genera tu cita ahora con solo unos clicks y programa cuando quieres que sea la cita y la hora.</p>
                                </div>
                              </div>
                              <div class="row g-3">
                                <div class="col-md-5 col-lg-4 order-md-last">
                                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Recomendaciones</span>
                                    <span class="badge bg-secondary rounded-pill">!</span>
                                  </h4>
                                  <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                      <div>
                                        <h6 class="my-0">Al agendar tu Cita</h6> 
                                        <br>
                                        <small class="text-muted">-. Rellena tus datos correctamente</small> <br>
                                        <small class="text-muted">-. Usa datos reales <br>
                                            -. Selecciona una Hora y Dia que puedas acudir <br>
                                            -. Seleccione el servicio que ocupes, en caso de que se ocupen distintos crea una cita para la siguiente hora <br><br>
                                        </small>
                                        <h6 class="my-0">Al momento de tu cita</h6> <br>
                                        <small class="text-muted">-. Llega 5 minutos antes <br>
                                          -. Puedes llevar alguna bebida para hidratar <br>
                                          -. Trata de no llevar acompañantes a menos de que sea muy necesario <br><br>
                                      </small>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-md-7 col-lg-8">
                                  <h3 class="mb-3">Datos de la Cita</h3>
                                    <div class="row g-3">
                                      <div class="col-12">
                                        <label for="username" class="form-label">Seleccione su Servicio</label>
                                        <div class="input-group has-validation">
                                          <select class="form-select" id="slcServicio" name="slcServicio" onchange="nameServ()">
                                            <option value="">Elegir tu servicio</option>
                                            <option value="1">Uñas de Acrilico</option>
                                            <option value="2">Cabello Pintado</option>
                                            <option value="3">Peinado</option>
                                            <option value="4">Skin Care</option>
                                            <option value="5">Manicure</option>
                                            <option value="6">Pedicure</option>
                                            <option value="7">Corte de Cabello</option>
                                            <option value="8">Otras</option>
                                          </select>
                                        </div>
                                      </div>
                      
                                      <div class="col-md-8">
                                        <input type="text" class="form-text-input" id="servicioNom" name="servicioNom" style="display: none;"> 

                                        <label>Fecha de la Cita</label>
                                        <div class="input-group has-validation">
                                           <input id="fech" class="form-control mt-2" type="date" name="fechCita" onchange="valiDate()">
                                        </div>
                                      </div>
                      
                                      <div class="col-md-4">
                                        <label for="Hora" class="form-label">Hora</label>
                                        <select class="form-select" id="slcHora" name="slcHora">
                                          <option value="">Escoge la hora</option>
                                          <option value="9:00">9:00 </option>
                                          <option value="10:00">10:00 </option>
                                          <option value="11:00">11:00 </option>
                                          <option value="12:00">12:00 </option>
                                          <option value="13:00">13:00 </option>
                                          <option value="14:00">14:00 </option>
                                          <option value="15:00">15:00 </option>
                                          <option value="16:00">16:00 </option>
                                          <option value="17:00">17:00 </option>
                                          <option value="18:00">18:00 </option>
                                          <option value="19:00">19:00 </option>
                                          <option value="20:00">20:00 </option>
                                        </select>
                                      </div>
                      
                                    <hr class="my-4">
                      
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="cbAcom" name="cbAcom"> 
                                      <label class="form-check-label" for="same-address">Llevaré a algun acompañante</label>
                                    </div>
                      
                                    <hr class="my-4">
                      
                                    <div class="col-12">
                                        <label for="method" class="form-label">Seleccione su Metodo de Pago</label>
                                        <div class="input-group has-validation">
                                          <select class="form-select" id="slcMetodo" name="slcMetodo">
                                            <option value="0">Elegir tu metodo</option>
                                            <option value="Efectivo">Efectivo</option>
                                            <option value="Tarjeta">Tarjeta</option>
                                            <option value="Otro">Otro</option>
                                          </select>
                                        </div>
                                      </div>
                                    <hr class="my-4">
                                    <button type="submit" style="background-color: #8946a6" class="btn w-100" style="display: block;">Generar Cita</button>
                                  </div>
                              </div>
                            </div>
                          </section>
                          </form>
                    </div>
                </div>
            </div>
        </article>
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
    </body>
</html>

<?php
  } else {
    echo 'Inicia sesion para crear una cita';
    header("Refresh: 2; URL = loginView.php");
  }
?>
