<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];


    // Validación
    $errores = array();

    if(empty($nombre)){
        $errores['nombre'] = 'Falta un  nombre';
    }

    if(empty($pais)){
        $errores['pais'] = 'Falta un país';
    }


    if(count($errores) == 0){

        $sql = "INSERT into desarrollador (`nombre`, `pais`) VALUES ('$nombre', '$pais');";

        $guardar = mysqli_query($db, $sql);

        header("Location: desarrolladores.php");
        //var_dump($guardar);


    }else{

        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
        header("Location: agregarD.php");
    }


}
