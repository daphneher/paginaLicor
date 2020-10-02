<?php
include_once "mostrar_errores.inc.php";

$titulo = "Blogs";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>
<section id="principal">
  <section id="buscar" class="show-mobile">
    <form>
      <h2 class="encabezado-sidebar">Buscar</h2>
      <i class="fa fa-search" aria-hidden="true"></i>
      <input type="text" name="buscar" placeholder="Buscar" >
      <button class="boton">Ok</button>
    </form>
  </section>
  <section id="publicaciones">
    <?php                
    $query = "SELECT * FROM tabla_blog";
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
    ?>
    <article class="post">
      <a href="<?php echo POST."?id=".$row['id'] ?>" class="enlace-post">
        <h2 class="titulo-post"><?php echo $row['titulo'];?></h2>
      </a>
      <div class="row">
        <div class="col-md-5">
          <img src="data:image/jpg;base64,<?php echo base64_encode($row['img_presentacion']); ?>" 
          class="img-post">
          <br>
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

        </div>
        <div class="col-md-7">
          <p class="parrafo-post">
            <?php echo $row['presentacion']; ?>
          </p> 
          <br>
          <a href="<?php echo POST."?id=".$row['id'] ?>" class="leer-mas">Leer mas...</a>       
        </div>
      </div>  
      <br>    
    </article>

    <?php      
    }
    ?>

    <!-- REVISAR - PAGINACION SIN NINGUN FUNCIONAMIENTO -->
    <div id="paginacion">
      <p>Anteriores publicaciones<a href="#" class="enlace-paginacion">Siguientes publicaciones</a></p>
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