<?php
	//$conexion = new mysqli("localhost", "host", "bocala12", "vino");    // DOMINIO
	$conexion = new mysqli("localhost", "root", "", "vino");    // LOCALHOST

	if ($conexion) {
	} else {
		include_once("plantillas/documento-apertura.inc.php");
		include_once("plantillas/admin-navegador.inc.php");
		echo '<br>';
		echo '<h3>ERROR: No se logró conexion con la base de datos.</h3>';
		include_once "plantillas/documento-cierre.inc.php";
	}
?>