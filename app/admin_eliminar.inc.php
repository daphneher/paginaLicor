<?php
// Validador de Usuario
error_reporting(0); //descomentar cuando el proyecto se termino

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

$tabla = $_REQUEST['tabla'];
$id = $_REQUEST['id'];

$query = "DELETE FROM ".$tabla." WHERE id='$id' ";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . ADMIN_MOSTRAR . "?tabla=" . $tabla);
} else {
	echo "ERROR: No se eliminó";
}
