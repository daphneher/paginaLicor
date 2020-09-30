<?php
// Validador de Usuario
include_once "mostrar_errores.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

$tabla = $_REQUEST['tabla'];

if ($tabla !== "tabla_blog") {
	$nombre = $_POST['nombre'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	if ($tabla !== TABLA_BANNER) {
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$query = "INSERT INTO ".$tabla."(nombre,imagen,descripcion,precio) VALUES('$nombre','$imagen','$descripcion','$precio')";
	} else {
		$query = "INSERT INTO ".$tabla."(nombre,imagen) VALUES('$nombre','$imagen')";
	}
} else {
	$autor = $_POST['autor'];
	$categoria = $_POST['categoria'];
	$titulo = $_POST['titulo'];
	$img_presentacion = addslashes(file_get_contents($_FILES['img_presentacion']['tmp_name']));
	$presentacion = $_POST['presentacion'];
	$texto1 = $_POST['texto1'];
	$img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
	$texto2 = $_POST['texto2'];
	$img2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));

	$aux1 = "(fecha,autor,categoria,titulo,img_presentacion,presentacion,texto1,img1,texto2,img2)";
	$aux2 = "(NOW(),'$autor','$categoria','$titulo','$img_presentacion','$presentacion','$texto1','$img1','$texto2','$img2')";

	$query = "INSERT INTO ".$tabla.$aux1." VALUES".$aux2;
}

$resultado = $conexion->query($query);

if ($resultado) {
	header("Location:" . ADMIN_MOSTRAR . "?tabla=" . $tabla);
} else {
	include_once("plantillas/documento-apertura.inc.php");
	include_once("plantillas/admin-navegador.inc.php");
	echo '<br>';
	echo '<h3 style="text-align: center">ERROR: No se subio</h3>';
	include_once "plantillas/documento-cierre.inc.php";
}
