<?php
include_once "config.inc.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Admin - Vino</title>

        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>estilos.css" rel="stylesheet">
    </head>
	<body>
        <div class="container"  style="text-align:center;">
            <h2>Seleccione la tabla de imagenes que desea administrar</h2>
            <div class="row">
                <div class="col-md-3">
                    <h3>Tabla Banner</h3>
                    <a href="<?php echo ADMIN_BANNER; ?>" type="button" class="btn btn-primary">Subir Nueva Imagen</a>
                    <br><br>
                    <a href="<?php echo MOSTRAR_BANNER; ?>" type="button" class="btn btn-primary">Ver tabla</a>
                </div>  
                <div class="col-md-3">
                    
                </div> 
                <div class="col-md-3">
                    
                </div> 
                <div class="col-md-3">
                    
                </div>               
            </div>
        </div>
        <br>
        <script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
    </body>
</html>