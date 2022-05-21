<?php
// Conexión
$servidor = 'localhost';
$usuario = 'saruto';
$password = 'toor';
$basededatos = 'proyecto';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}
