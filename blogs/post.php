<?php
include_once "mostrar_errores.inc.php";

$titulo = "Blogs";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";

$id = $_REQUEST['id'];

$query = "SELECT * FROM tabla_blog WHERE id = '$id'";
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();
?>
<section id="principal">
    
    <section id="publicaciones">
        <article class="post">
            <h2 class="titulo-post"><?php echo $row['titulo']; ?></h2>
            <p>
              <strong>Por: </strong><span class="datos-publicaciones"><?php echo $row['autor']; ?></span>
            </p>
            <p>  
              <strong>Fecha: </strong><span class="datos-publicaciones">
                <?php 
                $fecha = explode(" ", $row['fecha']);
                $fecha = array_filter($fecha);
                $fecha = array_slice($fecha, 0);
                echo $fecha[0]; 
                ?>          
              </span>
            </p>
            <img id="img_post" src="data:image/jpg;base64,<?php echo base64_encode($row['img1']);?>">
            <br>
            <p class="parrafo-post" style="padding-top: 1em;">
              <?php echo $row['texto1']; ?>
            </p>

            <?php 
            if ($row['img2']) {
            ?> 
            <img id="img_post" src="data:image/jpg;base64,<?php echo base64_encode($row['img2']);?>">
            <?php
            }
            ?>

            <?php 
            if ($row['texto2']) {
            ?> 
            <p class="parrafo-post" style="padding-top: 1em;">
              <?php echo $row['texto1']; ?>
            </p>
            <?php
            }
            ?>
          </article>
      <div id="paginacion">
        <p><a href="#">Otras publicaciones</a>
      </div>
    </section>
    <?php
    include_once "blogs/plantilla-de-blog.inc.php";
    ?>
</section>

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
include_once "plantillas/menu-blog.inc.php";
?>
<!-- Fin Botón Menú -->

<?php
include_once "plantillas/documento-cierre.inc.php";
?>