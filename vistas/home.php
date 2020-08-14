<?php 
    include_once "app/config.inc.php";

    $titulo = "Vinos - Home";
?>
<!DOCTYPE html>
<html lang="es">
    <head>        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        
        <meta name="description" content="">
        <meta name="keywords" content="">

        <?php  
            if (!isset($titulo) || empty($titulo)){
                $titulo = 'Soluciones y Tecnología Empresarial - SMART';
            }
            echo "<title>$titulo</title>";
        ?> 
        
        <link rel="icon" type="image/png" href="">

        <link href="<?php echo RUTA_CSS ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>estilos.css" rel="stylesheet">
        <link href="<?php echo RUTA_CSS ?>font-awesome.min.css" rel="stylesheet">        
    </head>

    <body>
        <!-- Banner -->
        <div class="slideshow-container" id="banner">

            <div class="mySlides fade">
              <img class="img-responsive" src="<?php echo RUTA_IMG ?>banner-1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img class="img-responsive" src="<?php echo RUTA_IMG ?>banner-2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img class="img-responsive" src="<?php echo RUTA_IMG ?>banner-3.jpg" style="width:100%">
            </div> 
            <i class="fa fa-angle-right fa-2x next" aria-hidden="true" onclick="plusSlides(1)"></i>
            <i class="fa fa-angle-left fa-2x prev" aria-hidden="true" onclick="plusSlides(-1)"></i>
        </div>
        <!-- Fin Banner -->

        <!-- Main -->
        <div class="container" id="nosotros">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
        </div>

        <!-- Nuestros Vinos -->
        <div class="container" id="nuestros-vinos">

            <div class="row">
                <div class="col-md-4">
                    <p style="color:#f9af25;text-align:center;font-size:3em;margin-bottom:0em;">
                        Nuestros Vinos
                    </p>
                    <img class="img-responsive" style="margin:auto;width:40em;" src="<?php echo RUTA_IMG ?>separador.jpg">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-8">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo RUTA_IMG ?>copas-de-vinos.jpg" id="copas" class="img-thumbnail" alt="Snow" style="width:100%;">
                </div>
            </div>

            <br>   

            <button class="accordion">Vino Tinto</button>
            <div class="panel">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Vino Blanco</button>
            <div class="panel">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Vino Rosado</button>
            <div class="panel">
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <br>
            
 
        </div>   
        <!-- Fin Nuestros Vinos -->

        <div class="container" id="contacto">
            <h2>Contacto</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
        </div>

        <div class="container" id="ubicacion">
            <h2>Ubicacion</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
        </div>
        <!-- Fin Main -->

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
                <a href="#">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#nuestros-vinos">Nuestros Vinos</a>
                <a href="#contacto">Contacto</a>
                <a href="#ubicacion">Ubicación</a>
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

        <!-- Banner -->
        <script>
            var slideIndex = 1;
            var timer = null;
            showSlides(slideIndex);

            function plusSlides(n) {
              clearTimeout(timer);
              showSlides(slideIndex += n);
            }

            function showSlides(n) {
              clearTimeout(timer);
              var i;
              var slides = document.getElementsByClassName("mySlides");
              
              if (n==undefined){n = ++slideIndex}
              if (n > slides.length) {slideIndex = 1}
              if (n < 1) {slideIndex = slides.length}
              
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
              
              slides[slideIndex-1].style.display = "block";
              timer = setTimeout(showSlides, 10000);
            } 
        </script>
        <!-- Fin Banner -->

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

        <script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
    </body>
</html>