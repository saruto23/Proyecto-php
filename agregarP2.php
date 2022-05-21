<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    $nombre = $_POST['nombre'];
    $compania = $_POST['compania'];


    // Validación
    $errores = array();

    if(empty($nombre)){
        $errores['nombre'] = 'Falta un  nombre';
    }

    if(empty($compania)){
        $errores['compania'] = 'Falta una compañia';
    }


    if(count($errores) == 0){

        $sql = "INSERT into plataformas (`nombre`, `compañia`) VALUES ('$nombre', '$compania');";

        $guardar = mysqli_query($db, $sql);


        //var_dump($guardar);


    }else{

        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);

    }

    header("Location: plataforma.php");
}
