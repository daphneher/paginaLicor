<?php
include_once "mostrar_errores.inc.php";

$tipo_vino = $_REQUEST['vino'];

$titulo = "Vinos - $tipo_vino";

include_once "plantillas/documento-apertura.inc.php";
?>

<div id="titulo">
	<img class="img-responsive" style="margin:auto;width:100%;" src="<?php echo RUTA_IMG ?>titulo.jpg">
</div>

<!-- Descripcion del vino -->
<?php
include_once "plantillas/descripcion-tabla_vino_$tipo_vino.inc.php";
?>
<!-- Fin de Descripcion del vino -->

<!-- Visualizacion de Productos -->
<div class="container-fluid" style="background-color: black;padding-bottom: 5em;">
    <?php                
    $query = "SELECT * FROM tabla_vino_".$tipo_vino;
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
    ?>
	
    <div class="row" >
        <br>
    	<img  class="img-responsive" style="margin:auto;width:80%;" src="<?php echo RUTA_IMG ?>sepnegro.jpg">
        <br>
		<div class="col-md-5 col-sm-5">
			<center>
   				<img id="variedad-img" class="img-responsive" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
			</center>
		</div>
		<div class="col-md-7 col-sm-7">
            <div class="container" style="width: 100%">

				<h3 style="text-align: center; color:white;"><b><?php echo $row['nombre']; ?></b></h3>
			    <br>

			 	<p style="text-align:justify; color:white;"><?php echo $row['descripcion']; ?></p>
                <br>

			    <h3 style="text-align: center; color:white;"><b>$ <?php echo $row['precio']; ?></b></h3>
            </div>	       
		</div>
		<br>
		<br>
	</div>
	
    <?php
    }
    ?>
</div>
<!-- Fin de Visualizacion de Productos -->

<!-- Pie de pagina -->
<div class="container-fluid" id="piePagina">
    <h2 style="text-align: left;">Redes Sociales</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
    <br><br>

    <div id="smart">
        <a href="http://solutec-it.com" target="_blank">                    
            Página Web realizada por: Soluciones y Tecnología - SMART
        </a>
    </div>
    <br>
</div>
<!-- Fin Pie de pagina -->

 <!-- Botón Menú -->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="<?php echo SERVIDOR;?>#">Inicio</a>
        <a href="<?php echo SERVIDOR;?>#nosotros">Nosotros</a>
        <a href="<?php echo SERVIDOR;?>#nuestros-vinos">Nuestros Vinos</a>
        <a href="<?php echo SERVIDOR;?>#contacto">Contacto</a>
        <a href="<?php echo SERVIDOR;?>#ubicacion">Ubicación</a>
    </div>
</div>
<div id="menu">            
    <span class="btnMenu" onclick="openNav()">&#9776; Menú</span>
</div>  
<!-- Fin Botón Menú -->

<!-- Botón Wsp -->
<a href="https://www.google.com" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a> 
<!-- Fin Botón Wsp -->

<!-- Botón Menú -->
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
  document.getElementById("menu").style.display = "none";

}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("menu").style.display = "block";
}
</script>
<!-- Fin Botón Menú -->

<?php
include_once "plantillas/documento-cierre.inc.php";
?>