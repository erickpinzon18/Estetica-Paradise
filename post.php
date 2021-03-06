<?php 
  include("connect.php");
  $msj="";
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
    <body onload="onLoad();">

      <script>
        function onLoad() {
          habilitar();
        }
        function valiDate() {
          var dia = document.getElementById('slcDia').value, mes = document.getElementById('slcMes').value, ano = 2022;
          var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
          var objFecha = new Date(ano+", "+ mes + ", "+ dia);
          var diaLet = objFecha.toLocaleDateString("en-US", options);
          diaLet = diaLet.substr(0,2);
          if (diaLet == "Sa" || diaLet == "Su") {
            alert("No hay citas en fines de semana");
            document.getElementById("slcDia").value = 0;
          }
        }

        function habilitar() {
                      document.getElementById('slcServicio').disabled=false;
                      document.getElementById('slcMes').disabled=false;
                      document.getElementById('slcDia').disabled=false;
                      document.getElementById('slcHora').disabled=false;
                      document.getElementById('cbAcom').disabled=false;
                      document.getElementById('cbPrisa').disabled=false;
                      document.getElementById('chTar').disabled=false;
                      document.getElementById('chEfe').disabled=false;
                      document.getElementById('chOtro').disabled=false;
                      document.getElementById('btnGeneral').disabled=false;
        }

        function verCita() {
                      var Promo = document.getElementById('PromoCode').textContent;
                      var Servicio = document.getElementById('slcServicio').value;
                      var mes = document.getElementById('slcMes').value;
                      var dia = document.getElementById('slcDia').value;
                      var hora = document.getElementById('slcHora').value;
                      var acomp = document.getElementById('cbAcom').checked;
                      var prisa = document.getElementById('cbPrisa').checked;
                      var Tarjeta = document.getElementById('chTar').checked;
                      var Efectivo = document.getElementById('chEfe').checked;
                      var Otro = document.getElementById('chOtro').checked;

                      /* alert("Su cita ha sido generada correctamente, sus datos son:"+
                            "\r\nCodigo de Promocion: "+ Promo +
                            "\r\nServicio: "+ Servicio +
                            "\r\nFehcha "+ dia + " de " + mes + " a las " + hora +
                            "\r\nLlevara acompa??antes? "+ acomp +
                            "\r\nTendra prisa? "+ prisa +
                            "\r\nPagara con Tarjeta? "+ Tarjeta +
                            "\r\nPagara con Efectivo? "+ Efectivo +
                            "\r\nPagara con otro metodo? " + Otro);*/

                      document.getElementById("verNombre").value = "Usuario";
                      
                      switch (Servicio) {
                        case "Peina": document.getElementById("verServicio").value = "Peinado"; break;
                        case "Corte": document.getElementById("verServicio").value = "Corete de Cabello"; break;
                        case "Otras": document.getElementById("verServicio").value = "Otras"; break;
                        case "Pinta": document.getElementById("verServicio").value = "Pintado de Cabello"; break;
                        case "Unas": document.getElementById("verServicio").value = "U??as de Acrilico"; break;
                        case "Pedicure": document.getElementById("verServicio").value = "Pedicure"; break;
                        case "Manicure": document.getElementById("verServicio").value = "Manicure"; break;
                        case "Skin": document.getElementById("verServicio").value = "Skin Care"; break;
                        default: document.getElementById("verServicio").value = "Seleccione un servicio";
                      }
                      
                      document.getElementById("verFecha").value = dia + " / " + mes;
                      document.getElementById("verHora").value = hora;

                      if (acomp == true) {
                        if (prisa == true) {
                          document.getElementById("verExtra").value = "La persona llevara acompa??ante y tendra prisa";
                        }  else {
                          document.getElementById("verExtra").value = "La persona llevara acompa??ante";
                        }
                      } else {
                        if (prisa == true) {
                          document.getElementById("verExtra").value = "La persona tendrea prisa";
                        } else {
                          document.getElementById("verExtra").value = "Ninguno";
                        }
                      }
                      
                      if (Efectivo == true) {
                        document.getElementById("verMetodo").value = "Metodo de pago: Efectivo";
                      }
                      if (Tarjeta == true) {
                        document.getElementById("verMetodo").value = "Metodo de pago: Tarjeta";
                      }
                      if (Otros == true) {
                        document.getElementById("verMetodo").value = "Metodo de pago: Otros";
                      }
        }
      </script>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
              <img alt="image" src="src/LogoLet.png" height="40">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Men??
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">Trabajos Realizados</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Generador de Citas</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Acerca de</a></li>
                    </ul>
                </div>
            </div>
        </nav>  
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1558025137-0b406e9cc169?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Generador de Citas</h1>
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

        <!-- Modal HTML -->
        <div id="myModalSucces" class="modal fade">
          <div class="modal-dialog modal-confirm" style="background-color: #fff;">
            <div class="modal-content">
              <article class="card-body">
                <h2 class="card-title text-center mb-4 mt-1 fw-bold">Se ha registrado Correctamente
                </h2>
                <hr>
                <h3 class="text-success text-center">Por favor inicia sesion en la siguiente pesta??a</h3>
                  <div class="form-group">
                    <button href="#myModal" data-dismiss="modal" class="btn btn-primary w-100" data-toggle="modal" style="display: block;">Continuar</button>
                  </div>
              </article>
            </div>
          </div>
        </div>    
        
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10">
                        
                        <section class="pt-5 pb-5 bg-light">
                            <div class="container px-md-5">
                              <div class="py-5 text-center row justify-content-center">
                                <div class="col-md-10">
                                  <img class="ml-md-3 mr-3 mr-md-0 order-1 img-fluid rounded  mb-4" src="src/LogoOG.png" alt="Generic placeholder image">
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
                                          -. Trata de no llevar acompa??antes a menos de que sea muy necesario <br><br>
                                      </small>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-md-7 col-lg-8">
                                  <h4 class="mb-3">Datos de la Cita</h4>
                                  <form class="needs-validation" novalidate="">
                                    <div class="row g-3">
                      
                                      <div class="col-12">
                                        <label for="username" class="form-label">Seleccione su Servicio</label>
                                        <div class="input-group has-validation">
                                          <select class="form-select" id="slcServicio" required="" disabled>
                                            <option value="">Elegir tu servicio</option>
                                            <option value="Unas">U??as de Acrilico</option>
                                            <option value="Pinta">Cabello Pintado</option>
                                            <option value="Peina">Peinado</option>
                                            <option value="Skin">Skink Care</option>
                                            <option value="Manicure">Manicure</option>
                                            <option value="Pedicure">Pedicure</option>
                                            <option value="Corte">Corte de Cabello</option>
                                            <option value="Otras">Otras</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Your username is required.
                                          </div>
                                        </div>
                                      </div>
                      
                                      <div class="col-md-4">
                                        <label for="Mes" class="form-label">Mes</label>
                                        <select class="form-select" id="slcMes" required="" disabled>
                                          <option value="01">Enero</option>
                                          <option value="02">Febrero</option>
                                          <option value="03">Marzo</option>
                                          <option value="04">Abril</option>
                                          <option value="05">Mayo</option>
                                          <option value="06">Junio</option>
                                          <option value="07">Julio</option>
                                          <option value="08">Agosto</option>
                                          <option value="09">Septiembre</option>
                                          <option value="10">Octubre</option>
                                          <option value="11">Noviembre</option>
                                          <option value="12">Diciembre</option>
                                          <option value="0" selected>Elige tu mes</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Por favor escoge el mes
                                        </div>
                                      </div>
                      
                                      <div class="col-md-4">
                                        <label for="Dia" class="form-label">D??a</label>
                                        <select class="form-select" id="slcDia" required="" disabled onchange="valiDate()">
                                          <option value="0" selected>Elige tu dia</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="11">11</option>
                                          <option value="12">12</option>
                                          <option value="13">13</option>
                                          <option value="14">14</option>
                                          <option value="15">15</option>
                                          <option value="16">16</option>
                                          <option value="17">17</option>
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Por favor escoge el d??a
                                        </div>
                                      </div>
                      
                                      <div class="col-md-4">
                                        <label for="Hora" class="form-label">Hora</label>
                                        <select class="form-select" id="slcHora" required=""disabled>
                                          <option value="">Escoge la hora</option>
                                          <option value="9">9:00 </option>
                                          <option value="10">10:00 </option>
                                          <option value="11">11:00 </option>
                                          <option value="12">12:00 </option>
                                          <option value="13">13:00 </option>
                                          <option value="14">14:00 </option>
                                          <option value="15">15:00 </option>
                                          <option value="16">16:00 </option>
                                          <option value="17">17:00 </option>
                                          <option value="18">18:00 </option>
                                          <option value="19">19:00 </option>
                                          <option value="20">20:00 </option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Por favor escoge la hora 
                                        </div>
                                      </div>
                      
                                    <hr class="my-4">
                      
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="cbAcom" disabled> 
                                      <label class="form-check-label" for="same-address">Llevar?? a algun acompa??ante</label>
                                    </div>
                      
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="cbPrisa" disabled>
                                      <label class="form-check-label" for="save-info">Tendr?? prisa y necesito salir lo mas temprano psoible</label>
                                    </div>
                      
                                    <hr class="my-4">
                      
                                    <h4 class="mb-3">Tipo de Pago</h4>
                      
                                    <div class="my-3">
                                      <div class="form-check">
                                        <input id="chTar" name="paymentMethod" type="radio" class="form-check-input" required="" disabled>
                                        <label class="form-check-label" for="credit">Tarjeta Bnacaria</label>
                                      </div>
                                      <div class="form-check">
                                        <input id="chEfe" name="paymentMethod" type="radio" class="form-check-input" required="" disabled>
                                        <label class="form-check-label" for="debit">Efectivo</label>
                                      </div>
                                      <div class="form-check">
                                        <input id="chOtro" name="paymentMethod" type="radio" class="form-check-input" required="" disabled>
                                        <label class="form-check-label" for="paypal">Otro</label>
                                      </div>
                                    </div>
                                    <hr class="my-4">
                                    <a class="w-100 btn btn-primary btn-lg" id="btnGeneral" href="#myModalGenerate" class="trigger-btn" data-toggle="modal" onclick="verCita()" disabled>Genera tu Cita</a>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </section>

                          <div id="myModalGenerate" class="modal fade">
                            <div class="modal-dialog modal-confirm" style="background-color: #fff;">
                              <div class="modal-content">
                                <article class="card-body">
                                  <h2 class="card-title fw-bold   mb-4 mt-1">Verificar Cita</h2>
                                  <form>
                                    <div class="form-group">
                                      <label>Nombre</label>
                                      <input id="verNombre" class="form-control mt-2" placeholder="Nombre de Usuario" type="text" disabled> 
                                    </div>
                                    <div class="form-group">
                                      <label>Servicio</label>
                                      <input id="verServicio" class="form-control mt-2" placeholder="Tipo de Servicio" type="text" disabled> 
                                    </div>
                                    <div class="form-group mt-2">
                                      <label>Fecha</label>
                                      <input id="verFecha" class="form-control mt-2" placeholder="Fecha de Cita" type="text" disabled>
                                    </div>
                                    <div class="form-group mt-2">
                                      <label>Hora</label>
                                      <input id="verHora" class="form-control" placeholder="00:00" type="text" disabled>
                                    </div>
                                    <div class="form-group mt-2">
                                      <label>Metodo de Pago</label>
                                      <input id="verMetodo" class="form-control" placeholder="Metodo de Pago" type="text" disabled>
                                    </div>
                                    <div class="form-group mt-2">
                                      <label>Extras</label>
                                      <input id="verExtra" class="form-control" placeholder="Extras" type="text" disabled>
                                    </div>
                                    <button data-dismiss="modal" class="btn btn-success w-100" style="display: block;">Registrar</button>

                                  </form>
                                </article>
                              </div>
                            </div>
                          </div>    

                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <footer class="pt-4 pb-4 ">
          <div class="container">
            <div class="row text-center align-items-center">
              <div class="col-12 col-sm-6 col-md-4 text-sm-start">
                <img alt="image" src="src/LogoIzq.png" height="40">
              </div>
              <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0 text-center text-sm-end text-md-center">
                ?? Todos los derechos reservados 2022
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
