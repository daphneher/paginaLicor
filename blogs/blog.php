<?php
include_once "mostrar_errores.inc.php";


$titulo = "blogs";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>









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
<script>
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("btn-menu");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.remove("btnMenu")
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
        navbar.classList.add("btnMenu")
      }
    }
</script>
<!-- Fin Botón Menú -->
