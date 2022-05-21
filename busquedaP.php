<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    // Validación
    $campos= array();
$campos ['nombre'] = $_POST['nombre'];
    $campos ['compania'] = $_POST['compania'];


    $_SESSION['campos'] = $campos;

    header("Location: plataforma.php");


}
