<?php

//define("SERVIDOR", "https://ideasdelvino.com");   // DOMINIO  
define("SERVIDOR", "http://localhost/vinos");   // LOCALHOST

// Rutas Vistas
define("LOGIN_ADMIN", SERVIDOR . "/login_admin");
define("CERRAR_SESION", SERVIDOR . "/cerrar_sesion");

// Variedades
define("VARIEDAD", SERVIDOR . "/variedad");

// Blogs
define("BLOG", SERVIDOR . "/blog");
define("POST", BLOG . "/post");

// Rutas Recursos
define("RUTA_CSS", SERVIDOR . "/css/");
define("RUTA_JS", SERVIDOR . "/js/");
define("RUTA_IMG", SERVIDOR . "/img/");

// Usuario
define("USER", SERVIDOR . "/un-buen-vino-al-alcance-de-un-click");
define("NOMBRE_USER", "todovino");
define("CLAVE_USER", "elvino");

// Rutas DataBase
define("ADMIN_SUBIR", USER . "/admin_subir");
define("ADMIN_ELIMINAR", USER . "/admin_eliminar");
define("ADMIN_GUARDAR", USER . "/admin_guardar");
define("ADMIN_MODIFICAR", USER . "/admin_modificar");
define("ADMIN_MOSTRAR", USER . "/admin_mostrar");
define("ADMIN_PROCESO_MODIFICAR", USER . "/admin_proceso_modificar");

// Tablas de DB
define("TABLA_BANNER", "tabla_banner");
define("TABLA_VINO_TINTO", "tabla_vino_tinto");
define("TABLA_VINO_BLANCO", "tabla_vino_blanco");
define("TABLA_VINO_ROSA", "tabla_vino_rosa");