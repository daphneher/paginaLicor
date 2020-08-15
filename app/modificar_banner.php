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
        <?php 
            include_once("conexion.php");

            $id = $_REQUEST['id'];

            $query = "SELECT * FROM tabla_banner WHERE id = '$id'";
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();
        ?>

        <br><br><br>
        <center>
            <form action="<?php echo PROCESO_MODIFICAR_BANNER;?>?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>">
                <br><br>
                <img style="height: 12em;margin: auto;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
                <br><br>
                <input type="file" REQUIRED name="imagen">
                <br><br>
                <input type="submit" name="Subir">
            </form>
        </center>
        <br>

        <script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
    </body>
</html>
