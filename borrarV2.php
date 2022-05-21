<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';



    $idVideojuego = $_POST['idVideojuego'];




    $sql= "DELETE from videojuegos WHERE idVideojuego = $idVideojuego;";
    $guardar = mysqli_query($db, $sql);







    header("Location: index.php");
}
