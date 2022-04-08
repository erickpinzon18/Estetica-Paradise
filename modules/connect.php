<?php
    $server = "localhost";
    $database = "Estetica";
    $username = "root";
    $password = "root";
    $con = mysqli_connect($server, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "<p style='display: none;' id='conexion-bd'>No se pudo conectar a la base de datos :</p>".mysqli_connect_error();
    }
    else {
        echo "<p style='display: none;' id='conexion-bd'>Conexion establecida</p>";
    }
?>