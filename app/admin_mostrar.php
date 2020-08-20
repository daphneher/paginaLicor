<?php
// Validador de Usuario
error_reporting(0); //descomentar cuando el proyecto se termino

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

$titulo = "Administrador - Mostrar";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$tabla = $_REQUEST['tabla'];
?>
<br>
<div class="container">
	<h2>
		<a href="<?php echo ADMIN_SUBIR."?tabla=".$tabla; ?>">
			<i class="fa fa-plus" aria-hidden="true"></i> Agregar una nueva imagen
		</a>
	</h2>
	<br><br>

	<div class="row">
	<?php 
		$tabla = $_REQUEST['tabla'];
		$query = "SELECT * FROM ". $tabla;
		$resultado = $conexion->query($query);
		while ($row = $resultado->fetch_assoc()) {
	?>
		<div class="col-md-4">
			<center id="col-img-banner">
				<p style="text-align: center;"><b>
					Nombre: <?php echo $row['nombre']; ?>						
				</b></p>
			
				<img id="img-banner" class="img-responsive img-thumbnail"
				src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">	
				<br>
				<?php
				if ($tabla !== TABLA_BANNER) {
				
				?>
				<br><br>
				<p style="text-align: justify;">
					Descripción: <?php echo $row['descripcion']; ?>
				</p>
				<br>
				<p style="text-align: justify;">Precio: <?php echo $row['precio']; ?></p>
				<?php
				}
				?>
				<br>
				<a style="padding:1em;" href="<?php echo ADMIN_MODIFICAR."?id=".$row['id']."&tabla=".$tabla; ?>">
					<i class="fa fa-refresh" aria-hidden="true"></i> Modificar
				</a>
				<br><br>
				<a style="padding:1em;" href="<?php echo ADMIN_ELIMINAR."?id=".$row['id']."&tabla=".$tabla; ?>">
					<i class="fa fa-times" aria-hidden="true"></i> Eliminar
				</a>						
			</center>			
		</div>

	<?php
	}
	?>			
	</div>
</div>

<?php
include_once "plantillas/documento-cierre.inc.php";
?>		