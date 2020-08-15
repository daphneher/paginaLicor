<?php
include_once("config.inc.php");
include_once("conexion.php");

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO tabla_banner(nombre,imagen) VALUES('$nombre','$imagen')";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: mostrar_banner");
} else {
	echo "No se subio";
}