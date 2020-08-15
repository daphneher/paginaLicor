<?php
include_once "config.inc.php";
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
		<br><br><br>
		<center>
			<h3>Recuerde que las imagenes deben ser en formato .jpg</h3>
			<form action="<?php echo GUARDAR_BANNER; ?>" method="POST" enctype="multipart/form-data">
				<input type="text" REQUIRED name="nombre" placeholder="Nombre..." value=""><br><br>
				<input type="file" REQUIRED name="imagen"><br>
				<input type="submit" name="Subir">
			</form>
		</center>
		<br>
		<div class="container">
			<h2>Ver todas las imagenes de banner</h2>
			<center>
				<a href="<?php echo MOSTRAR_BANNER; ?>" type="button" class="btn btn-primary">Ver tabla</a>
			</center>
			
		</div>
		<br>

		<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
	</body>
</html>