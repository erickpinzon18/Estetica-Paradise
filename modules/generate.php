<?php
    session_start();
    $type = $_SESSION['type'];
      $usuario = $_SESSION['dev'];
      //Conexion con BD
      include("connect.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Paradise</title>
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
  </head>
  <body>
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
          <div class="container px-4 px-lg-5">
              <img alt="image" src="../assets/img/LogoLet.png" height="40">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menú
                  <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ms-auto py-4 py-lg-0">
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../indexView.php">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" 
                          href=
                          <?php
                            if(isset($usuario)) {
                              if($type == "admin") {
                                echo '"../indexView.php"';
                              } else {
                                echo '"../generateView.php"';
                              }
                            } else {
                              echo '"../loginView.php"';
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
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../galleryView.php">Galeria</a></li>
                      <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../contactView.php">Acerca de</a></li>
                    </ul>
                    <form class="form-inline" method="POST" action="../modules/logout.php">
                    <?php
                        if(isset($usuario)) {
                          echo '<button class="btn btn-danger my-2 my-sm-0 btn-sm" style="display: block;" type="submit">LOG OUT</button>';
                        } else {
                          echo '<a class="btn btn-success my-2 my-sm-0 btn-sm" href="../loginView.php">LOGIN</a>';
                        }
                      ?>
                    </form>
              </div>
          </div>
      </nav>

      <?php
    
    mysqli_set_charset($con, "utf8");
    //Deshabilitar errores de PHP
    error_reporting(0);
    
    if($_POST["cbAcom"]) {
        $acompana = "Si";
    } else {
        $acompana = "No";
    }
    
    $consulta = "SELECT * FROM `cita` WHERE `fecha` = '".$_POST["fechCita"]."' AND `hora` LIKE '".$_POST["slcHora"]."'";
    //echo $consulta;
    $resultado = mysqli_query($con, $consulta);
    //Validar que no haya una cita en la misma hora y fecha
    if (!$fila = mysqli_fetch_assoc($resultado)) {
        //Consulta
        $consulta = "INSERT INTO `cita` (`id_cita`, `usuario`, `id_servicio`, `fecha`, `hora`, `acompanante`, `forma`) 
                        VALUES (NULL, 
                            '".$usuario."', 
                            '".$_POST["slcServicio"]."', 
                            '".$_POST["fechCita"]."', 
                            '".$_POST["slcHora"]."', 
                            '".$acompana."', 
                            '".$_POST["slcMetodo"]."')";
        //echo $consulta;
        //Ejecuta consulta
        if(!$resultado = mysqli_query($con, $consulta)) {
           // echo "Error en la consulta";
        } else {
            //echo "Cita Generada Correctamente";

            $consulta = "SELECT n_Citas FROM clientes WHERE usuario = '".$usuario."'";
            //echo $consulta;
            //Ejecuta consulta
            $resultado = mysqli_query($con, $consulta);
            if ($fila = mysqli_fetch_assoc($resultado)) {
              //  echo "Entra a lo de n citas";
                $Citas = $fila["n_Citas"];
                $nCitas = $nCitas+1;
               // echo $nCitas;
                $consulta = "UPDATE `clientes` SET `n_Citas` = '".$nCitas."' WHERE `clientes`.`usuario` = '".$usuario."'";
                //Ejecuta consulta
                if(!$resultado = mysqli_query($con, $consulta)) {
                   // echo "Error en la consulta";
                    //header("Refresh: 5; URL = login.php");
                } else {
                  //  echo "Numero de Citas Actualizadas";
                    //header("Refresh: 5; URL = login.php");
                }
            } else {
               // echo "algo malio sal al mmomento de actualizar el numeor de citas;";
            }
            $consulta = "SELECT nombre, n_Citas, telefono, correo FROM clientes WHERE usuario = '".$usuario."'";
            //Ejecuta consulta
            $resultado = mysqli_query($con, $consulta);
            if ($fila = mysqli_fetch_assoc($resultado)) {
               // echo "Entra a lo de el correo";
                //Ejecuta consulta
                ?>  

    

                        <div class="container" style="display: none;">
                            <h1>Generador de Citas</h1>
                            <form target="_blank" action="https://formsubmit.co/erickpinzonhuerta1@gmail.com" method="POST">
                                <input type="text" name="Usuario" class="form-control" placeholder="Usuario" value="<?php echo $usuario; ?>" required>
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre Real" value="<?php echo $fila['nombre']; ?>" required>
                            <input type="text" name="Telefono" class="form-control" placeholder="Telefono" value="<?php echo $fila['telefono']; ?>" required>
                                <input type="text" name="Servicio" class="form-control" placeholder="Servicio" value="<?php echo $_POST['servicioNom']; ?>" required>
                                <input type="text" name="Fecha" class="form-control" placeholder="Fecha" value="<?php echo $_POST['fechCita']; ?>" required>
                                <input type="text" name="Hora" class="form-control" placeholder="Hora" value="<?php echo $_POST['slcHora']; ?>" required>
                                <input type="text" name="Acompañante" class="form-control" placeholder="Llevará Acompañante" value="<?php echo $acompana; ?>" required>
                                <input type="text" name="Metodo" class="form-control" placeholder="Metodo de Pago" value="<?php echo $_POST['slcMetodo']; ?>" required>
                                <input type="text" name="Citas" class="form-control" placeholder="Numero de Citas" value="<?php echo $Citas; ?>" required>
                                <!--CAMBIAR ESTO EN POR OTRA RUTA ESTATICA PERO EN WEB-->
                                <input type="hidden" name="_autoresponse" value="Felicidades, su cita ha sido enviada correctamente, favor de validar sus datos">
                                <input type="email" name="email" placeholder="Email Address" value="<?php echo $fila['correo']; ?>">
                                <input type="hidden" name="_next" value="http://localhost:8888/Estetica-Paradise/generateView.php">
                                <input type="hidden" name="_template" value="table">
                            <br>
                                <button type="submit" class="btn btn-lg btn-dark btn-block" id="btnSubmit">Submit Form</button>
                            </form>
                        </div>

                        <section class="pt-2 pb-2 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(http://fotoram.io/editor/files/2022/04/06/1649259463_74368.jpg);">
                            <div class="container ">
                                <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
                                <div class="col-12 col-md-12 h-50 ">
                                <img alt="image" src="../assets/img/LogoLet.png" width="40%">
                                    <h3 class="fw-bold text-light mb-2 mt-5"> Tu cita fue generada correctamente, porfavor da <br> click en continuar para notificar a la estilista de tu cita
                                    </h3>
                                    <p>
                                        <button  style="background-color: #8946a6; color: white;"  class="btn.lg" onclick="document.getElementById('btnSubmit').click();">Enviar</button>
                                    </p>
                                    <div class="btn-container-wrapper p-relative d-block  zindex-1">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>
                <?php
            }
        }
    } else {
        ?>
            <section class="pt-2 pb-2 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(http://fotoram.io/editor/files/2022/04/06/1649259463_74368.jpg);">
                            <div class="container ">
                                <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
                                <div class="col-12 col-md-12 h-50 ">
                                <img alt="image" src="../assets/img/LogoLet.png" width="40%">
                                    <h3 class="fw-bold text-light mb-2 mt-5"> Lo sentimos, ya hay una cita generada a esa fecha y hora, <br> por favor regresa y selecciona otro horario que se adapte a <br> tus necesidades
                                    </h3>
                                    <p>
                                        <button type="submit" style="background-color: #8946a6; color: white;" class="btn-lg" href="../generateView">Enviar</button>
                                    </p>
                                    <div class="btn-container-wrapper p-relative d-block  zindex-1">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>
        <?php
    }
?>

      


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
