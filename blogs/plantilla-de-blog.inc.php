<section id="sidebar" class="hide-mobile">
  <section id="buscar">
    <h2 class="encabezado-sidebar">Buscar</h2>
    <form>
      <input type="text" name="buscar" placeholder="Buscar" >
      <i class="fa fa-search" aria-hidden="true"></i>
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

    <?php
    $cont_publicaciones = 0;
    $query = "SELECT * FROM tabla_blog ORDER BY fecha DESC";
    $resultado = $conexion->query($query);
    while($cont_publicaciones != 4 and $row = $resultado->fetch_assoc()){
    ?>
    <a href="#" class="enlace-sidebar">
      <h2><?php echo $row['titulo']; ?></h2>
      <p>Esta es una descripcion del articulo publicado en la fecha de hoy </p>
    </a>
    <?php
      $cont_publicaciones++;
    }
    ?>
  </section>
</section>