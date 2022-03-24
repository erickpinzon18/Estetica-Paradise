<?php
    $msj = "";
    //Consult to BD
    $consultarSQL = "SELECT password, tipo FROM CLIENTES where usuario = ?";
    //Preparar consulta
    $consultaBD = $con->prepare($consultarSQL);

    //Ejecutar
    $consultaBD->execute($_POST["user"]);

    if($consultaBD->rowCount() == 1) {
        $password = $consultaBD->fetchColumn(0);
        $type = $consultaBD->fetchColumn(1);
        if($password == $_POST["password"]) {
            if ($type == 1) {
              $msj = "administrador" ;
            } else {
              $msj = "cliente";
            }
        } else {
            $msj = "Contraseña incorrecta";
        }
    } else {
        $msj = "No existe el usuario o la contraseña es incorrecta";
    }
?>