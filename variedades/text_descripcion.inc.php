
<?php
	$longitud_maxima = 100;
	$texto = $row['descripcion'];

    $resultado_texto = '';

    if (strlen($texto) >= $longitud_maxima) {

        $resultado_texto = substr($texto, 0, $longitud_maxima);

        $resultado_texto .= '...';
    } else {
        $resultado_texto = $texto;
    }
?>

<p id="text_descripcion"><?php echo $resultado_texto; ?></p>
<center>
	<button type="button" class="btn btn-primary">Leer más</button>
</center>
