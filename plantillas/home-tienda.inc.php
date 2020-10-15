<div class="container-fluid">        
    <div class="row paginacion_blog">
    <?php
    $paginacion = 1;
    $contador_col = 0;

    $query = "SELECT * FROM tabla_productos ORDER BY prioridadp ASC";
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
        if ($contador_col == 4) {
            $contador_col = 0;
            $paginacion++;
    ?>
    </div>
</div>
<div class="container-fluid">        
    <div class="row paginacion_blog">
    <?php
        }
        $contador_col++;
    ?>  
        
        <div class="col-md-3 col-sm-3 col-xs-6 col_mostrar_img_horizontal" style="padding-bottom: 3em;">
            <div  id="contenedor-vino" class=" col_blog_recientes">
                <h2 style="color:black; text-align: center;"><?php echo $row['nombre']?></h2>
                <br>
                <center>
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"
                     id="img_blog" class="img-responsive img-thumbnail img_blog_zoom hover-shadow cursor" onclick="openModal();currentSlide(<?php echo $img_actual; ?>)">
                </center>
                
                <?php include "variedades/text_descripcion.inc.php"; ?>
                <br>
                <center id="precio_variedad">
                    <h2><?php echo $row['precio']?></h2>
                </center>
            </div>
            <br>
        </div>
    <?php
        if ($paginacion == 6 and $contador_col == 4) {
            break;
        }
    }
    ?>
    </div>
</div>

<br><br>
<center>
    <ul class="pagination">
        <?php
        $i = 0;
        if ($paginacion > 6) { $paginacion = 6; }

        while ($paginacion != 0) {
            $paginacion--;
            $i++;

        ?>
        <li onclick="cambiarPagina(<?php echo $i ?>)">
            <a  class="paginacion_index" href="#nuestros-vinos" style="color:black;">
                <?php echo $i; ?>                    
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
</center>


<br><br>     