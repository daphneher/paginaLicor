<?php
include_once("config.inc.php");
include_once("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM tabla_banner WHERE id='$id' ";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: mostrar_banner");
} else {
	echo "ERROR: No se eliminó";
}