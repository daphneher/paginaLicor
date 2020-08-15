<?php
	include_once("config.inc.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Imagenes de Banner</title>

        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>estilos.css" rel="stylesheet">
    </head>

	<body>
		<br><br>
		<center>
			<table border="2">
				<thead>
					<tr>
						<th style="text-align: center; font-size: 1.5em;" colspan="4"><a href="<?php echo ADMIN_BANNER; ?>">Nuevo</a></th>
					</tr>
					<tr>
						<th style="text-align: center;">Nombre</th>
						<th style="text-align: center;">Imagen</th>
						<th style="text-align: center;">Operación 1</th>
						<th style="text-align: center;">Operación 2</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						include_once("conexion.php");

						$query = "SELECT * FROM tabla_banner";
						$resultado = $conexion->query($query);
						while ($row = $resultado->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $row['nombre']; ?> 						
							</td>
							<td>
								<img style="height: 12em;margin: auto;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
							</td>
							<td style="text-align: center;">
								<a href="<?php echo MODIFICAR_BANNER."?id=".$row['id']; ?>">Modificar</a>
							</td>
							<td style="text-align: center;">
								<a href="<?php echo ELIMINAR_BANNER."?id=".$row['id']; ?>">Eliminar</a>
							</td>
						</tr>


					<?php
						}
					?>
				</tbody>
			</table>
		</center>
		<br>
		
		<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
	</body>
</html>