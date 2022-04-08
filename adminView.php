<?php
    include("modules/connect.php");
    include("modules/login.php");
    session_start();
  $type = $_SESSION['type'];
  $usuario = $_SESSION['dev'];

  function eliminarCita($id) {
    echo $id;
  }



  if(isset($usuario)) {
    if($type=="admin") {

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <script >
            function eliminarCita(id) {
                alert(id);
                alert("Eliminar Cita");
                var ejec = "&lt;?php eliminarCita("+id+"&lt;?php)?>";
                alert(ejec);
                document.write(ejec);
            }
        </script>

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

      <header class="masthead" style="background-image: url('https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
      <main class="mb-4">
            <div class="container px-2">
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-10" style="border-radius: 15px; background-color: rgba(132, 89, 211, 0.39);">
                        <section class="pt-5 pb-5 ">
                              <table class="table text-light">
                                <thead style="background-color: #4000B7;">
                                    <tr>
                                        <th scope="col"><center>Id_Cita</center></th>
                                        <th scope="col"><center>Usuario</center></th>
                                        <th scope="col"><center>Servicio</center></th>
                                        <th scope="col"><center>Fecha</center></th>
                                        <th scope="col"><center>Hora</center></th>
                                        <th scope="col"><center>Acompañante</center></th>
                                        <th scope="col"><center>Pago</center></th>
                                        <th scope="col"><center>Eliminar</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    //Consulta
                                    $consulta = "SELECT * FROM Cita";
                                    //Ejecuta consulta
                                    $resultado = mysqli_query($con, $consulta);
                                    //Pregunta si devolvio algo
//                                    if($fila = mysqli_fetch_assoc($resultado)) {
                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                ?>
                                                <tr>
                                                    <th id="id<?php echo $fila['id_cita']; ?>"><center><?php echo $fila['id_cita']; ?></center></th>
                                                    <td><center><?php echo $fila['usuario']; ?></center></td>
                                                    <td><center><?php echo $fila['id_servicio']; ?></center></td>
                                                    <td><center><?php echo $fila['fecha']; ?></center></td>
                                                    <td><center><?php echo $fila['hora']; ?></center></td>
                                                    <td><center><?php echo $fila['acompanante']; ?></center></td>
                                                    <td><center><?php echo $fila['forma']; ?></center></td>
                                                    <td>
                                                <center> <!--Terminar funcion de borrar la cita seleccionada-->
                                                    <a class="btn btn-danger my-2 my-sm-0 btn-sm" href="modules/delete.php?id_cita=<?php echo $fila['id_cita']; ?>">X</a>
                                                </center>
                                                    </td>
                                                </tr>
                                <?php
                                        }
                                 //   } else {
                                   //     echo "No hay citas";
                                   // }
                                ?>
                             </tbody>
                          </table>
                        </section>
                    </div>
                </div>
            </div>
        </main>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</footer>
</html>
<?php
    } else {
    echo 'Solo entrada a administradores';
    header("Refresh: 2; URL = indexVIew.php");
    }
  } else {
    echo 'Inicia sesion para crear una cita';
    header("Refresh: 2; URL = loginView.php");
  }
?>