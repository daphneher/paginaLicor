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

$titulo = "Administrador - Subir";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$tabla = $_REQUEST['tabla'];
?>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-6">
		
			<div style="background-color:#7f7f7f; padding:1em;">
				<?php
				include_once "plantillas/admin-subir-formulario.inc.php";
				?>
				<br>
			</div>
			<br>	
		</div>

		<div class="col-md-1"></div>
 
		<div class="col-md-5 text-center">
			<h3>Ver todas las imagenes</h3>
			<br>
			<a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".$tabla; ?>">Ver tabla</a>
		</div>
	</div>
</div>

<br>

<?php
include_once "plantillas/documento-cierre.inc.php";
?>
