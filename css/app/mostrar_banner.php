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

$titulo = "Administrador ";
include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");
$tabla = $_REQUEST['tabla'];
?>
<br>
<div class="container">
	<h2>
		<a href="<?php echo ADMIN_BANNER. "?tabla=".$tabla; ?>">
			<i class="fa fa-plus" aria-hidden="true"></i> Agregar una nueva imagen
		</a>
	</h2>
	<br><br>

	<div class="row">
	<?php 
		$query = "SELECT * FROM $tabla";
		$resultado = $conexion->query($query);
		while ($row = $resultado->fetch_assoc()) {
			if ($tabla === "tabla_banner"){
	?>
				<div class="col-md-4">
					<center id="col-img-banner">
						<p style="text-align: center;"><b>
						Nombre: <?php echo $row['nombre']; ?>						
						</b></p>
			
						<img id="img-banner" class="img-responsive img-thumbnail"
						src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">		
				
						<br><br>
						<a style="padding:1em;" href="<?php echo MODIFICAR_BANNER."?id=".$row['id']."?tabla=".$tabla; ?>">
							<i class="fa fa-refresh" aria-hidden="true"></i> Modificar
						</a>
						<br><br>
						<a style="padding:1em;" href="<?php echo ELIMINAR_BANNER."?id=".$row['id']."?tabla=".$tabla; ?>">
							<i class="fa fa-times" aria-hidden="true"></i> Eliminar
						</a>						
					</center>			
				</div>
	<?php	
			} else {
	?>
				<div class="col-md-4">
					<center id="col-img-banner">
						<p style="text-align: center;"><b>
						Nombre: <?php echo $row['nombre']; ?>						
						</b></p>
			
						<img id="img-banner" class="img-responsive img-thumbnail"
						src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
						<br><br>	

						<p style="text-align: center;"><b>
						descripción: <?php echo $row['descripcion']; ?>						
						</b></p>

						<p style="text-align: center;"><b>
						precio: <?php echo $row['precio']; ?>						
						</b></p>	
				
						<br><br>
						<a style="padding:1em;" href="<?php echo MODIFICAR_BANNER."?id=".$row['id']."?tabla=".$tabla; ?>">
							<i class="fa fa-refresh" aria-hidden="true"></i> Modificar
						</a>
						<br><br>
						<a style="padding:1em;" href="<?php echo ELIMINAR_BANNER."?id=".$row['id']."?tabla=".$tabla; ?>">
							<i class="fa fa-times" aria-hidden="true"></i> Eliminar
						</a>						
					</center>			
				</div>
	<?php			
			}
	?>

		

	<?php
	}
	?>			
	</div>
</div>

<?php
include_once "plantillas/documento-cierre.inc.php";
?>		