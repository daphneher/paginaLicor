<?php

//define("SERVIDOR", "http://solutec-it.com");   // DOMINIO  
define("SERVIDOR", "http://localhost/vinos");   // LOCALHOST

// Rutas Vistas
define("LOGIN_ADMIN", SERVIDOR . "/login_admin");
define("CERRAR_SESION", SERVIDOR . "/cerrar_sesion");

// Rutas Recursos
define("RUTA_CSS", SERVIDOR . "/css/");
define("RUTA_JS", SERVIDOR . "/js/");
define("RUTA_IMG", SERVIDOR . "/img/");

// Usuario
define("USER", SERVIDOR . "/un-buen-vino-al-alcance-de-un-click");
define("NOMBRE_USER", "todovino");
define("CLAVE_USER", "elvino");

// Rutas DataBase
define("ADMIN_BANNER", USER . "/admin_banner");
define("ELIMINAR_BANNER", USER . "/eliminar_banner");
define("GUARDAR_BANNER", USER . "/guardar_banner");
define("MODIFICAR_BANNER", USER . "/modificar_banner");
define("MOSTRAR_BANNER", USER . "/mostrar_banner");
define("PROCESO_MODIFICAR_BANNER", USER . "/proceso_modificar_banner");

// Rutas Vinos
define("VINO-TINTO", SERVIDOR . "/tinto");
define("VINO-BLANCO", SERVIDOR . "/blanco");
define("VINO-ROSA", SERVIDOR . "/rosa");
