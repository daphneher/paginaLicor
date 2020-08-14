<!DOCTYPE html>
<html lang="es">
    <head>        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        
        <meta name="description" content="Soluciones y Tecnología Empresarial - SMART, una empresa que ofrece servicios informáticos y de otro índole">
        <meta name="keywords" content="solutec-it, solutec it, solutec-it.com, diseño de páginas web, servicios Smart, servicios IT, otros servicios">
        
        <?php  
            if (!isset($titulo) || empty($titulo)){
                $titulo = 'Soluciones y Tecnología Empresarial - SMART';
            }
            echo "<title>$titulo</title>";
        ?>      
        
        <link rel="icon" type="image/png" href="<?php echo RUTA_IMG ?>owl2_icon.png">
        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>estilos.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet">
        
    </head>
    <body>
    	<!-- BOTON UP -->
        <button onclick="topFunction()" id="myBtn" title="Subir">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
        </button>