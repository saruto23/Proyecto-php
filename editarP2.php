<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    $nombre = $_POST['nombre'];
    $compania = $_POST['compania'];
    $idPlataforma = $_POST['idPlataforma'];

    // Validación
    $errores = array();

    if(empty($nombre)){
        $errores['nombre'] = 'Falta un nombre';
    }

    if(empty($compania)){
        $errores['compania'] = 'Falta una Compañia';
    }



    if(count($errores) == 0){

        $sql= "UPDATE plataformas set nombre = '$nombre', compañia = '$compania' where idPlataforma = $idPlataforma ;";
        $guardar = mysqli_query($db, $sql);

    }else{

        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);

    }

    header("Location: plataforma.php");
}
