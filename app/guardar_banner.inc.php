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

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO tabla_banner(nombre,imagen) VALUES('$nombre','$imagen')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" .  ADMIN_BANNER);
} else {
	echo "No se subio";
}