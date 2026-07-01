<?php
// parámetros de conexión locales por defecto en XAMPP
$servidor = "localhost";
$usuario = "root";
$password = ""; 
$base_datos = "bd_norte_capital"; 

// Crear la conexión usando la extensión MySQLi
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

// verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// soporte tildes y eñes correctamente desde PHP
$conexion->set_charset("utf8mb4");
?>