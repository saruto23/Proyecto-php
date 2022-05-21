<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    // Validación
    $campos= array();
$campos ['titulo'] = $_POST['titulo'];
    $campos ['genero'] = $_POST['genero'];
    $campos ['plataforma'] = $_POST['plataforma'];
    $campos['desarrollador'] = $_POST['desarrollador'];
    $campos['fLanzamiento'] = $_POST['fLanzamiento'];
    $_SESSION['campos'] = $campos;

    header("Location: busqueda.php");


}
