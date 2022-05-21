<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $fLanzamiento = $_POST['fLanzamiento'];
    $desarrollador = $_POST['desarrollador'];
    $plataforma = $_POST['plataforma'];
    $idVideojuego = $_POST['idVideojuego'];

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

        $sql= "UPDATE videojuegos SET titulo = '$titulo' ,  genero = '$genero', fLanzamiento = '$fLanzamiento', idPlataforma = $plataforma,  idDesarrollador = $desarrollador WHERE idVideojuego = $idVideojuego;";
        $guardar = mysqli_query($db, $sql);

    }else{

        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);

    }

    header("Location: index.php");
}
