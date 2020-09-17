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

<!-- Pie de pagina -->
<div class="container-fluid" id="piePagina">
    <h2 style="text-align: left;">Redes Sociales</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
    <br><br>

    <div id="smart">
        <a href="http://solutec-it.com" target="_blank">                    
            Página Web realizada por: Soluciones y Tecnología - SMART
        </a>
    </div>
    <br>
</div>
<!-- Fin Pie de pagina -->



<?php
include_once "variedades/js_variedades.inc.php";
include_once "plantillas/documento-cierre.inc.php";
?>