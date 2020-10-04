<?php
include_once "mostrar_errores.inc.php";

$tipo_vino = $_REQUEST['vino'];

$titulo = "Vinos - $tipo_vino";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>

<!-- Descripcion del vino -->
<?php
include_once "variedades/descripcion-tabla_vino_$tipo_vino.inc.php";
?>
<!-- Fin de Descripcion del vino -->

<!-- Visualizacion de Productos -->
<?php
include_once "variedades/mostrar_img_vinos.inc.php";
?>
<!-- Fin de Visualizacion de Productos -->

<!-- Redes Sociales -->
<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>
<!-- Fin Redes Sociales -->

<!-- Botón Menú -->
<?php
include_once "plantillas/menu.inc.php";
?>
<!-- Fin Botón Menú -->

<?php
include_once "variedades/js_variedades.inc.php";
include_once "plantillas/documento-cierre.inc.php";
?>