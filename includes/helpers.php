<?php

// Muestra los errores que nos devuelven en la sesión.

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error text-danger' >".$errores[$campo].'</div>';

    }

    return $alerta;
}

// Elimina los errores de la sesión

function borrarErrores(){
    $borrado = false;

    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    }


    return $borrado;
}

function obtenerPlataformas($conexion){

    $sql = "select nombre, compañia, idPlataforma from plataformas;";
    $plataformas = mysqli_query($conexion, $sql);

    $resultado = [];

    if($plataformas && mysqli_num_rows($plataformas) >= 1){
        $resultado = $plataformas;
    }

    return $resultado;

}

function obtenerVideojuegos($conexion){

    $sql = "SELECT v.idVideojuego, v.titulo, v.genero, v.fLanzamiento, p.nombre as 'Plataforma',  d.nombre as 'Desarrollador' FROM videojuegos v JOIN plataformas p ON v.idPlataforma=p.idPlataforma join desarrollador d on v.idDesarrollador=d.idDesarrollador;";
    $plataformas = mysqli_query($conexion, $sql);

    $resultado = [];

    if($plataformas && mysqli_num_rows($plataformas) >= 1){
        $resultado = $plataformas;
    }

    return $resultado;

}

function obtenerDesarrolladores($conexion){

    $sql = "select nombre, pais, idDesarrollador from desarrollador;";
    $desarrolladores = mysqli_query($conexion, $sql);

    $resultado = [];

    if($desarrolladores && mysqli_num_rows($desarrolladores) >= 1){
        $resultado = $desarrolladores;
    }

    return $resultado;

}

function obtenerVideojuego($conexion, $id){

    $sql = "SELECT v.idDesarrollador, v.idVideojuego, v.idPlataforma,  v.titulo, v.genero, v.fLanzamiento, p.nombre as 'Plataforma',  d.nombre as 'Desarrollador' FROM videojuegos v JOIN plataformas p ON v.idPlataforma=p.idPlataforma join desarrollador d on v.idDesarrollador=d.idDesarrollador where v.idVideojuego =$id;";
    $videojuegos = mysqli_query($conexion, $sql);

    $resultado = [];

    if($videojuegos && mysqli_num_rows($videojuegos) >= 1){
        $resultado = $videojuegos;
    }

    return $resultado;

}

function obtenerPlataforma($conexion, $id){

$sql = "SELECT idPlataforma, nombre, compañia from plataformas where idPlataforma =$id ;";
    $plataformas = mysqli_query($conexion, $sql);

    $resultado = [];

    if($plataformas && mysqli_num_rows($plataformas) >= 1){
        $resultado = $plataformas;
    }

    return $resultado;

}

function obtenerDesarrollador($conexion, $id){

    $sql = "SELECT idDesarrollador,  nombre, pais from desarrollador where idDesarrollador =$id ;";
    $desarrolladores = mysqli_query($conexion, $sql);

    $resultado = [];

    if($desarrolladores && mysqli_num_rows($desarrolladores) >= 1){
        $resultado = $desarrolladores;
    }

    return $resultado;

}

function busqueda($conexion, $campos){
    $titulo = $campos['titulo'];
    $genero = $campos['genero'];
    $plataforma = $campos['plataforma'];
    //$sql = "select titulo, genero FROM videojuegos WHERE titulo LIKE '%$titulo%' AND genero LIKE '%$genero%';";
    $sql = "SELECT v.idVideojuego, v.titulo, v.genero, v.fLanzamiento, p.nombre as 'Plataforma',  d.nombre as 'Desarrollador' FROM videojuegos v JOIN plataformas p ON v.idPlataforma=p.idPlataforma join desarrollador d on v.idDesarrollador=d.idDesarrollador WHERE v.titulo LIKE '%$titulo%' AND v.genero LIKE '%$genero%' AND p.nombre LIKE '%$plataforma%';";

    $desarrolladores = mysqli_query($conexion, $sql);

    $resultado = [];

    if($desarrolladores && mysqli_num_rows($desarrolladores) >= 1){
        $resultado = $desarrolladores;

    }

    return $resultado;
}



