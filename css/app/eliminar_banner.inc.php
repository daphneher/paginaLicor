<?php
// Validador de Usuario
error_reporting(0); //descomentar cuando el proyecto se termino

include_once "config.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "conexion.php";
?>

<?php

$id = $_REQUEST['id'];

$query = "DELETE FROM tabla_banner WHERE id='$id' ";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . MOSTRAR_BANNER);
} else {
	echo "ERROR: No se eliminó";
}