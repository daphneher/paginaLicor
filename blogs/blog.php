<?php
include_once "mostrar_errores.inc.php";

if (isset($_POST['ok'])) {
  $buscar = $_REQUEST['buscar'];
}

$titulo = "Blogs";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>
<section id="principal">
  <?php

  include_once "blogs/ver-articulos.inc.php";

  include_once "blogs/panel-derecho-blog.inc.php";
  ?>
</section>

<!-- Redes Sociales -->
<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>
<!-- Fin Redes Sociales -->

<!-- Botón Menú -->
<?php
include_once "plantillas/menu-blog.inc.php";
?>
<!-- Fin Botón Menú -->

<?php
include_once "plantillas/documento-cierre.inc.php";
?>