<?php
//error_reporting(0);   //descomentar cuando el proyecto se termine
include_once "plantillas/documento-apertura.inc.php";
$titulo = "Vinos - Tinto";
?>
<div id="titulo">
	<img class="img-responsive" style="margin:auto;width:100%;" src="<?php echo RUTA_IMG ?>titulo.jpg">
</div>
<div>
	<div id="descripcion" class="row">
        <div class="col-md-4">
        	<img  class="img-responsive" style="margin:0;width:100%;" src="<?php echo RUTA_IMG ?>vino-tinto.jpg">
        </div>
        <div class="col-md-8">
        	<h1 style = "font-family:didot,serif,helvética;padding-left: 50px"><b>Vino Tinto</b></h1>
        	<p style="padding-left: 50px;padding-right: 50px;font-family:didot,serif,helvética;font-size: 20pt"><b>
        		El vino es producto de la transformación de la uva, fruto de la cepa. En el caso de los vinos tintos, la uva tinta, aporta al caldo el color a través de su piel, el 	
        		aroma personal y el sabor que lo diferencia.
        	</b>
        	</p>
        </div>
    </div>            	
</div>
<?php                
                $query = "SELECT * FROM tabla_vino_tinto";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>
			<div class="container" style="background-color: black;">	
                <div class="row" >
                	<img  class="img-responsive" style="margin:0;width:100%;" src="<?php echo RUTA_IMG ?>sepnegro.jpg">
    				<div class="col-md-5" >
        				<div align="center">
               				<img class="img-responsive" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" 
                      			style="width:100%;margin:auto;">
        				</div>
    				</div>
   					<div class="col-md-7">

   						<h3 style="text-align: center; color:white;"><b>
						<?php echo $row['nombre']; ?>						
						</b></h3>
						<br>

       				 	<p style="text-align: center; color:white;">
						<?php echo $row['descripcion']; ?>						
						</p>
						<br>

						<h3 style="text-align: center; color:white;"><b>
						 $ <?php echo $row['precio']; ?>						
						</b></h3>	       
    				</div>
    				<br>
					<br>
				</div>
			</div>	
            <?php
                }
            ?>

<img  class="img-responsive" style="margin:0;width:100%;" src="<?php echo RUTA_IMG ?>negro.jpg">

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
            <span id="copita" class="fa fa-glass" aria-hidden="true" style="padding-bottom:0.2em;">          
            </span>
            <span id="btnMenu" onclick="openNav()">&#9776; Menú</span>
        </div>  
        <!-- Fin Botón Menú -->

        <!-- Botón Wsp -->
        <a href="https://www.google.com" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a> 
        <!-- Fin Botón Wsp -->
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
         <!-- Nuestros Vinos -->
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                } 
              });
            }
        </script>
        <!-- Fin Nuestros Vinos -->
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