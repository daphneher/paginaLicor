<?php
include_once "mostrar_errores.inc.php";

$tipo_vino = $_REQUEST['vino'];

$titulo = "Vinos - $tipo_vino";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>

<!-- Descripcion del vino -->
<?php
include_once "plantillas/descripcion-tabla_vino_$tipo_vino.inc.php";
?>
<!-- Fin de Descripcion del vino -->

<!-- Visualizacion de Productos -->
<div class="container-fluid" style="background-image: url('img/fondo-producto.jpg');">
    <br><br>
    <div class="row" >
        <!--
        <img  class="img-responsive" style="margin:auto;width:80%;" src="<?php echo RUTA_IMG ?>sepnegro.jpg">
        -->
        <?php                
        $query = "SELECT * FROM tabla_vino_".$tipo_vino;
        $resultado = $conexion->query($query);
        $img_actual = 0;
        while($row = $resultado->fetch_assoc()){
            $img_actual++;
        ?>
 
    		<div class="col-md-4 col-sm-6 col-xs-6" style="padding-bottom: 3em;">
                <div id="contenedor-vino">
                    <img id="variedad-img" class="img-responsive" class="hover-shadow cursor" 
                    src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"
                    onclick="openModal();currentSlide(<?php echo $img_actual; ?>)">
                    <br>
                    <h3 style="color:black; text-align: center;"><b><?php echo $row['nombre']; ?></b></h3>
                    <br>
                    <p style="color:black;padding-right:0.4em;padding-left:0.4em;"><?php echo $row['descripcion']; ?></p>
                    <br>
                    <p style="color:red;font-size: 1.7em; text-align: center;"><b>$ <?php echo $row['precio']; ?></b></p>
                </div>
    		</div>
        <?php
        }
        ?> 

        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <?php                
                $query = "SELECT * FROM tabla_vino_".$tipo_vino;
                $resultado = $conexion->query($query);
                $img_actual = 0;
                while($row = $resultado->fetch_assoc()){
                ?>                
                    <div class="mySlides">
                      <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
                    </div>
                <?php
                }
                ?>     
            </div>
        </div>    
	</div>
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
<?php
include_once "plantillas/menu.inc.php";
?>
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


<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
}
</script>

<?php
include_once "plantillas/documento-cierre.inc.php";
?>