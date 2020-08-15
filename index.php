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

			// Subir archivos a base datos	
			case 'mi-dinero-vino-como-el-viento-y-se-fue-como-el-humo-xd':
				$ruta_elegida = "app/admin.php";
				break;		
		}
	} elseif (count($partes_ruta) == 3) {	
		switch ($partes_ruta[2]) {
			case 'admin_banner':
				$ruta_elegida = "app/admin_banner.php";
				break;

			case 'eliminar_banner':
				$ruta_elegida = "app/eliminar_banner.inc.php";
				break;

			case 'guardar_banner':
			$ruta_elegida = "app/guardar_banner.inc.php";
			break;

			case 'modificar_banner':
			$ruta_elegida = "app/modificar_banner.php";
			break;

			case 'mostrar_banner':
			$ruta_elegida = "app/mostrar_banner.php";
			break;

			case 'proceso_modificar_banner':
			$ruta_elegida = "app/proceso_modificar_banner.inc.php";
			break;
		}
	} 
}

include_once $ruta_elegida;