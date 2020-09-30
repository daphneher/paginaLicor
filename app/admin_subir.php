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

if ($tabla != "tabla_blog") {

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
} else {
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		
			<div style="background-color:#7f7f7f; padding:1em;">
				<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(ADMIN_GUARDAR."?tabla=".$tabla); ?>">
					<center style="color: black;">
						
						<!-- Nombra no mas de 50 caracteres -->
						<h4 style="text-align:left;">Autor:</h4> 
						<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" REQUIRED name="autor" maxlength="50" required autofocus>	
						<br><br>

						<h4 style="text-align:left;">Categoria:</h4> 
						<select id="ctg" REQUIRED name="categoria" >
							<option value="" selected="selected">- selecciona -</option>
						    <option value="Accesorios">Accesorios</option>
						    <option value="Aprender de licores">Aprender de licores</option>
						    <option value="Cocteles">Cocteles</option>
						  	<option value="Maridajes">Maridajes</option>
							<option value="Momentos para compartir">Momentos para compartir</option>
							<option value="Expertos dicen">Expertos dicen</option>
						</select>
						<br><br>

						<h4 style="text-align:left;">Titulo:</h4> 
						<input style="color:black; background-color:#ffffff;" placeholder="Máximo 150 caracteres..." type="text" REQUIRED name="titulo" maxlength="150" required>	
						<br><br>

						<h4 style="text-align:left;">Imagen de presentacion:</h4> 
						<input type="file" REQUIRED name="img_presentacion">
						<br><br>

						<h4 style="text-align:left;">Presentacion:</h4> 
						<p>
					    	<textarea style="color:black; background-color:#ffffff;max-width: min-content;" placeholder="Máximo 250 caracteres..." name="presentacion" rows="4" cols="70" maxlength="250" required></textarea>
					    </p>
					    <br><br>

					    <h4 style="text-align:left;">Texto 1:</h4> 
						<p>
					    	<textarea style="color:black; background-color:#ffffff;max-width: min-content;" placeholder="Máximo 31500 caracteres..." name="texto1" rows="4" cols="70" maxlength="31500" required></textarea>
					    </p>
					    <br><br>

					    <h4 style="text-align:left;">Imagen 1:</h4> 
						<input type="file" REQUIRED name="img1">
						<br><br>

						<h4 style="text-align:left;">Texto 2 (opcional):</h4> 
						<p>
					    	<textarea style="color:black; background-color:#ffffff;max-width: min-content;" placeholder="Máximo 31500 caracteres..." name="texto2" rows="4" cols="70" maxlength="31500"></textarea>
					    </p>
					    <br><br>

					    <h4 style="text-align:left;">Imagen 2 (opcional):</h4> 
						<input type="file" name="img2">
						<br><br>

						<input type="submit" name="Subir">
					</center>
				</form>	
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
}
?>

        <script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
    </body>
</html>