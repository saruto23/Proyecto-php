<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';



    $idPlataforma = $_POST['idPlataforma'];




    $sql= "DELETE from plataformas WHERE idPlataforma = $idPlataforma;";
    $guardar = mysqli_query($db, $sql);







    header("Location: plataforma.php");
}
