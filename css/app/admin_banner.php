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
$titulo = "Subir Datos";
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
					if($tabla === "tabla_banner"){

				?>
					<h3 style="color:red;">¡IMPORTANTE!</h3>
					<p><b>Para una mejor visualización las característica de las imágenes deben ser:</b></p>
					<ul>
						<li>Formato: .jpg, .png</li>
						<li>Dimensiones: 1200 x 600</li>			
					</ul>
				<?php		
					}else{
				?>
					<h3 style="color:red;">¡IMPORTANTE!</h3>
					<p><b>Para una mejor visualización las característica de las imágenes deben ser:</b></p>
					<ul>
						<li>Formato: .jpg, .png</li>
						<li>Dimensiones: que maneje una relación de aspecto de 1:1</li>			
					</ul>
				<?php	
					}
				?>
				
			</div>		
			<br>		
			<div style="background-color:#7f7f7f; padding:1em;">
				<form action="<?php echo GUARDAR_BANNER. "?tabla=".$tabla; ?>" method="POST" enctype="multipart/form-data">
					<center>
						<!-- Nombra no mas de 50 caracteres -->
						<input style="color:black; background-color:#ffffff;" type="text" name="nombre" placeholder="Nombre de la imagen..." value="" required autofocus>	
						<br>
						
						<?php
							if ($tabla !== "tabla_banner"){
						?> 
							<input style="color:black; background-color:#ffffff;" type="text" name="descripcion" placeholder="Agregar descripción del producto" value="" required >
							<br>
							<!-- averiguar para hacer numero-->
							<input style="color:black; background-color:#ffffff;" type="text" name="precio" placeholder="precio del producto" value="" required ><br>	
						<?php
							}
						?>
						<br>
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
			<h3>Ver toda la información de la tabla</h3>
			<br>
			<a href="<?php echo MOSTRAR_BANNER. "?tabla=".$tabla; ?>" type="button" class="btn btn-primary">Ver tabla</a>
		</div>
	</div>

</div>
<br>
<?php
include_once "plantillas/documento-cierre.inc.php";
?>
