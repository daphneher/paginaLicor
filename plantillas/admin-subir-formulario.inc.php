<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(ADMIN_GUARDAR."?tabla=".$tabla); ?>">
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
		<br><br>
		<input type="submit" name="Subir">
	</center>
</form>	