<?php
include_once "mostrar_errores.inc.php";


$titulo = "Blogs";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>

<section id="principal">
	<section id="publicaciones">
		<article class="post">
			<a href="#" class="enlace-post">
				<h2 class="titulo-post">Titulo del articulo</h2>
			</a>
			<img src="<?php echo RUTA_IMG ?>vino-blanco.jpg"  class="img-post">
			<p>
				<strong>Por:</strong><span class="datos-publicaciones">Federico Orozco</span>
				<strong>Fecha:</strong><span class="datos-publicaciones">17 de septiembre de 2020</span>
			</p>
			<p class="parrafo-post">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="#" class="leer-mas">Leer mas...</a>
		</article>
		<article class="post">
			<a href="#" class="enlace-post">
				<h2 class="titulo-post">Titulo del articulo</h2>
			</a>
			<img src="<?php echo RUTA_IMG ?>vino-blanco.jpg"  class="img-post">
			<p>
				<strong>Por:</strong><span class="datos-publicaciones">Federico Orozco</span>
				<strong>Fecha:</strong><span class="datos-publicaciones">17 de septiembre de 2020</span>
			</p>
			<p class="parrafo-post">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="#" class="leer-mas">Leer mas...</a>
		</article>
		<article class="post">
			<a href="#" class="enlace-post">
				<h2 class="titulo-post">Titulo del articulo</h2>
			</a>
			<img src="<?php echo RUTA_IMG ?>vino-blanco.jpg"  class="img-post">
			<p>
				<strong>Por:</strong><span class="datos-publicaciones">Federico Orozco</span>
				<strong>Fecha:</strong><span class="datos-publicaciones">17 de septiembre de 2020</span>
			</p>
			<p class="parrafo-post">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="#" class="leer-mas">Leer mas...</a>
		</article>
		<article class="post">
			<a href="#" class="enlace-post">
				<h2 class="titulo-post">Titulo del articulo</h2>
			</a>
			<img src="<?php echo RUTA_IMG ?>vino-blanco.jpg"  class="img-post">
			<p>
				<strong>Por:</strong><span class="datos-publicaciones">Federico Orozco</span>
				<strong>Fecha:</strong><span class="datos-publicaciones">17 de septiembre de 2020</span>
			</p>
			<p class="parrafo-post">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="#" class="leer-mas">Leer mas...</a>
		</article> 
		<article class="post">
			<a href="#" class="enlace-post">
				<h2 class="titulo-post">Titulo del articulo</h2>
			</a>
			<img src="<?php echo RUTA_IMG ?>vino-blanco.jpg"  class="img-post">
			<p>
				<strong>Por:</strong><span class="datos-publicaciones">Federico Orozco</span>
				<strong>Fecha:</strong><span class="datos-publicaciones">17 de septiembre de 2020</span>
			</p>
			<p class="parrafo-post">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="#" class="leer-mas">Leer mas...</a>
		</article>
		<div id="paginacion">
			<p>Anteriores publicaciones<a href="#" class="enlace-paginacion">Siguientes publicaciones</a></p>
		</div>
	</section>
	<section id="sidebar">
		<section id="buscar">
			<h2 class="encabezado-sidebar">Buscar</h2>
			<form>
				<input type="text" name="buscar" placeholder="buscar">
				<button class="boton">Ok</button>
			</form>
		</section>

		<section id="categorias">
			<h2 class="encabezado-sidebar">Categorias</h2>
			<a href="#" class="enlace-sidebar">Accesorios</a>
			<a href="#" class="enlace-sidebar">Aprender de licores</a>
			<a href="#" class="enlace-sidebar">Cocteles</a>
			<a href="#" class="enlace-sidebar">Maridajes</a>
			<a href="#" class="enlace-sidebar">Momentos para compartir </a>
			<a href="#" class="enlace-sidebar">Expertos dicen </a>
		</section>

		<section id="ultimos-post">
			<h2 class="encabezado-sidebar">Ultimos-post</h2>
			<a href="#" class="enlace-sidebar">
				<h2>Titulo del articulo</h2>
				<p>Esta es una descripcion del articulo publicado en la fecha de hoy </p>
			</a>
			<a href="#" class="enlace-sidebar">
				<h2>Titulo del articulo</h2>
				<p>Esta es una descripcion del articulo publicado en la fecha de hoy </p>
			</a>
			<a href="#" class="enlace-sidebar">
				<h2>Titulo del articulo</h2>
				<p>Esta es una descripcion del articulo publicado en la fecha de hoy </p>
			</a>
			<a href="#" class="enlace-sidebar"><h2>Titulo del articulo</h2>
				<p>Esta es una descripcion del articulo publicado en la fecha de hoy </p></a>
		</section>

	</section>
</section>
<!-- Menu -->
<?php
include_once "plantillas/menu.inc.php"
?>
<!-- Fin Menu -->

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

