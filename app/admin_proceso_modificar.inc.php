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
$tabla = $_REQUEST['tabla'];
$id = $_REQUEST['id'];

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

if ($tabla !== TABLA_BANNER) {
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];

	$query = "UPDATE " . $tabla . " SET nombre='$nombre', imagen='$imagen', descripcion='$descripcion', precio='$precio' WHERE id='$id' ";
}
else {
	$query = "UPDATE " . $tabla . " SET nombre='$nombre', imagen='$imagen' WHERE id='$id' ";
}

$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:". ADMIN_MOSTRAR . "?tabla=" . $tabla);
} else {
	echo "ERROR: No se modifico";
}