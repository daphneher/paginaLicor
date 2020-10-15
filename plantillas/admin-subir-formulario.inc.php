<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(ADMIN_GUARDAR."?tabla=".$tabla); ?>">
	<center style="color: black;">
		
		<!-- Nombra no mas de 50 caracteres -->
		<h4 style="text-align:left;">Nombre:</h4> 
		<input style="color:black; background-color:#ffffff;" placeholder="Máximo 50 caracteres..." type="text" REQUIRED name="nombre" maxlength="50" required autofocus>	
		<br><br>
		<?php
		if ($tabla !== TABLA_BANNER) {
		?>
		<h4 style="text-align:left;">Descripción:</h4> 
		<p>
	    	<textarea style="color:black; background-color:#ffffff;max-width: min-content;" placeholder="Máximo 250 caracteres..." name="descripcion" rows="4" cols="70" maxlength="250" required></textarea>
	    </p>
		<br>

		<h4 style="text-align:left;">Precio:</h4> 
		<input style="color:black; background-color:#ffffff;" type="text" placeholder="Máximo 20 caracteres..." REQUIRED name="precio" maxlength="20" required>	
		<br><br>
		<?php
		}
		?>
		<input type="file" REQUIRED name="imagen">
		<br><br>
		<input type="submit" name="Subir">
	</center>
</form>	