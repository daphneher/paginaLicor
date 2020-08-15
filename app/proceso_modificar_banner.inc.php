<?php
include_once("config.inc.php");
include_once("conexion.php");

$id = $_REQUEST['id'];

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "UPDATE tabla_banner SET nombre='$nombre', imagen='$imagen' WHERE id='$id' ";
$resultado = $conexion->query($query);

if ($resultado) {
	header("Location: mostrar_banner");
} else {
	echo "ERROR: No se modifico";
}