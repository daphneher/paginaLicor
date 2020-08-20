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

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

if ($tabla !== TABLA_BANNER) {
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$query = "INSERT INTO ".$tabla."(nombre,imagen,descripcion,precio) VALUES('$nombre','$imagen','$descripcion','$precio')";
} else {
	$query = "INSERT INTO ".$tabla."(nombre,imagen) VALUES('$nombre','$imagen')";
}

$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . ADMIN_SUBIR . "?tabla=" . $tabla);
} else {
	echo '<br>';
	echo 'No se subio <h3 style="text-align: center">ERROR: No se subio</h3>';
}