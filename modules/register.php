<?php
    //Conexion con BD
    include("connect.php");
    mysqli_set_charset($con, "utf8");
    //Deshabilitar errores de PHP
    error_reporting(0);

    //VERIFICAR USUARIO INEXISTENTE
    $consulta = "SELECT * FROM `clientes` WHERE `usuario` LIKE '".$_POST["Rusuario"]."'";
    //Ejecuta consulta
    $resultado = mysqli_query($con, $consulta);
    //Pregunta si devolvio algo
    if($fila = mysqli_fetch_assoc($resultado)) {
        echo "El usuario ya esta siendo utilizado";
        header("Refresh: 10; URL = login.php");
    } else {
        //Consulta
        $consulta = "INSERT INTO `clientes` (`usuario`, `nombre`, `telefono`, `fecha`, `password`, `n_Citas`, `genero`, `tipo`, `correo`) 
                    VALUES ('".$_POST["Rusuario"]."', 
                            '".$_POST["Rnombre"]."', 
                            '".$_POST["Rtel"]."', 
                            '".$_POST["Rfec"]."', 
                            '".$_POST["Rpass"]."', 
                            '0', 
                            '".$_POST["Rgenero"]."', 
                            '2',
                            '".$_POST["Remail"]."')";

        //Ejecuta consulta
        if(!$resultado = mysqli_query($con, $consulta)) {
            echo "Error en la consulta";
        } else {
            echo "Insertado Correctamente";
            header("Refresh: 10; URL = login.php");
        }
    }
?>