<?php

//DOMINIO
//$componente_url = parse_url($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);

//LOCALHOST
$componente_url = parse_url($_SERVER["REQUEST_URI"]);

$ruta = $componente_url['path'];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

//if ($partes_ruta[0] == 'solutec-it.com') {  // Dominio
if ($partes_ruta[0] == 'vinos') {   // LOCALHOST
	if (count($partes_ruta) == 1) {
		$ruta_elegida = "vistas/home.php";
	} elseif (count($partes_ruta) == 2) {
		switch ($partes_ruta[1]) {
			case 'nosotros':
				$ruta_elegida = "vistas/nosotros.php";
				break;				
			case 'contacto':
				$ruta_elegida = "vistas/contacto.php";
				break;
		}
	} 
}

include_once $ruta_elegida;