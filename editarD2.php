<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    //var_dump($_POST);

    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $idDesarrollador = $_POST['idDesarrollador'];

    // Validación
    $errores = array();

    if(empty($nombre)){
        $errores['nombre'] = 'Falta un nombre';
    }

    if(empty($pais)){
        $errores['pais'] = 'Falta un Pais';
    }



    if(count($errores) == 0){

        $sql= "UPDATE desarrollador set nombre = '$nombre', pais = '$pais' where idDesarrollador = $idDesarrollador ;";
        $guardar = mysqli_query($db, $sql);
        header("Location: desarrolladores.php");
    }else{

        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
        header("Location: editarD.php?idDesarrollador=$idDesarrollador");
    }


}
