<?php
	$conexion = new mysqli("localhost", "root", "", "vino");

	if ($conexion) {
	} else {
		echo "Conexion no existosa.";
	}
?>