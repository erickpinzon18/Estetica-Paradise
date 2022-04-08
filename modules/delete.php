<?php
    include 'connect.php';
    $id = $_GET['id_cita'];

    $consulta = "DELETE FROM `cita` WHERE `cita`.`id_cita` = ".$id;
    //Ejecuta consulta
    
    
    //Pregunta si devolvio algo
    if ($resultado = mysqli_query($con, $consulta)) {
        echo "<script>alert('Cita Eliminada');</script>";
        header("Refresh: 2; URL = ../adminView.php");
    } else {
        echo "<script>alert('Cita no Eliminada');</script>";
        header("Refresh: 2; URL = ../adminView.php");
    }
?>