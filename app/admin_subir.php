<?php
// Validador de Usuario
error_reporting(0); //descomentar cuando el proyecto se termino

include_once "config.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "conexion.php";
?>

<?php
$titulo = "Administrador - Subir";
include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$tabla = $_REQUEST['tabla'];
?>

<br>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div>
				<?php
				if ($tabla !== TABLA_BANNER) {
				?>
				<h3 style="color:red;">¡IMPORTANTE!</h3>
				<p><b>Para una mejor visualización las característica de las imágenes deben ser:</b></p>
				<ul>
					<li>Formato: .jpg, .png</li>
					<li>Dimensiones: relación de aspecto de 1:1</li>
				</ul>
				<?php
				} else{
				?>
				<h3 style="color:red;">¡IMPORTANTE!</h3>
				<p><b>Para una mejor visualización las característica de las imágenes deben ser:</b></p>
				<ul>
					<li>Formato: .jpg, .png</li>
					<li>Dimensiones: 1200 x 300</li>			
				</ul>
				<?php
				}
				?>
			</div>		
			<br>		
			<div style="background-color:#7f7f7f; padding:1em;">
				<form method="POST" enctype="multipart/form-data" action="<?php echo ADMIN_GUARDAR."?tabla=".$tabla; ?>">
					<center style="color: black;">
						<!-- Nombra no mas de 50 caracteres -->
						<h4 style="text-align:left;">Nombre:</h4> 
            			<input style="color:black; background-color:#ffffff;" type="text" REQUIRED name="nombre" placeholder="" value="" required autofocus>	
						<br><br>
						<?php
						if ($tabla !== TABLA_BANNER) {
						?>
						<h4 style="text-align:left;">Descripción:</h4> 
            			<input style="color:black; background-color:#ffffff;" type="text" REQUIRED name="descripcion" placeholder="" value="" required>	
						<br><br>

						<h4 style="text-align:left;">Precio:</h4> 
            			<input style="color:black; background-color:#ffffff;" type="text" REQUIRED name="precio" placeholder="" value="" required>	
						<br><br>
						<?php
						}
						?>
						<input type="file" REQUIRED name="imagen">
						<br>
						<input type="submit" name="Subir">
					</center>
				</form>	
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
