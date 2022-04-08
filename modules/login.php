<?php
    if(isset($_POST["password"])) {
      //Conexion con BD
    include("connect.php");
    
    $state = false;

    if ($con->connect_error) {
      echo 'Errno: '.$mysqli->connect_errno;
      echo '<br>';
      echo 'Error: '.$mysqli->connect_error;
      exit();
    }
    //Deshabilitar errores de PHP
    error_reporting(0);
    //Consulta
    $consulta = "SELECT password, tipo FROM CLIENTES WHERE usuario = '". $_POST["user"]."'";
    //Ejecuta consulta
    $resultado = mysqli_query($con, $consulta);
    
    //Pregunta si devolvio algo
    if ($fila = mysqli_fetch_assoc($resultado)) {
        //Validacion de Contraseña
        if($fila["password"] == $_POST["password"]) {
          echo $fila["password"];
            //Iniciamos sesion dentro de cookies
            session_start();
            $_SESSION['dev'] = $_POST["user"];

            //Verificacion de tipo de usuario
            if($fila["tipo"] == 1) {
              $_SESSION['type'] = "admin";
              echo "Bienvenid@ ".$_POST["user"];
              header("Refresh: 2; URL = ../adminView.php");
              exit;
            } else {
              $_SESSION['type'] = "user";
              echo "Bienvenid@ ".$_POST["user"];
              header("Refresh: 2; URL = ../generateView.php");
              exit;
            }
        } else {
          echo "<script>alert('Contraseña Erronea');</script>";
          header("Refresh: 1; URL = ../loginView.php");
        }
    } else {
      echo "<script>alert('Usuario No Encontrado');</script>";
      header("Refresh: 1; URL = ../loginView.php");
    }
    }
?>
