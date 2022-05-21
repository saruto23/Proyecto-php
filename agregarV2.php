<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $fLanzamiento = $_POST['fLanzamiento'];
    $desarrollador = $_POST['desarrollador'];
    $plataforma = $_POST['plataforma'];

    // Validación
    $errores = array();

    if(empty($titulo)){
        $errores['titulo'] = 'Falta un  titulo';
    }

    if(empty($genero)){
        $errores['genero'] = 'Falta un genero';
    }

    if(empty($fLanzamiento)){
        $errores['fLanzamiento'] = 'Inserte una fecha';

    }

    if(count($errores) == 0){

        $sql = "INSERT INTO `videojuegos` (`titulo`, `genero`, `fLanzamiento`,`idDesarrollador`, `idPlataforma` ) VALUES ('$titulo', '$genero', '$fLanzamiento', '$desarrollador', '$plataforma');";

        $guardar = mysqli_query($db, $sql);


        //var_dump($guardar);


    }else{

        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);

    }

    header("Location: index.php");
}
