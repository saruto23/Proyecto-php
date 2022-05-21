<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';



    $idDesarrollador = $_POST['idDesarrollador'];




    $sql= "DELETE from desarrollador WHERE idDesarrollador = $idDesarrollador;";
    $guardar = mysqli_query($db, $sql);







    header("Location: desarrolladores.php");
}
