<?php
include_once "mostrar_errores.inc.php";


$titulo = "blogs";

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
  <section id="sidebar"></section>
</section>


<!-- Botón Menú -->
<?php
include_once "plantillas/menu.inc.php";
?>
<!-- Fin Botón Menú -->

<?php
include_once "plantillas/documento-cierre.inc.php";
?>