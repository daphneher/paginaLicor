<?php
$elementos = 0;
$query = "SELECT * FROM tabla_productos ORDER BY prioridad ASC";
$resultado = $conexion->query($query);
while($row = $resultado->fetch_assoc()){
    
    if ($elementos == 0) {
?>
    <div class="row paginacion_productos">
<?php
    }
    if ($elementos < 5) {
        $elementos++;
?>
        <div class="col-md-2 col-sm-2">
            <br>
            <h3 id="nombreProductos"><?php echo $row['nombre']; ?></h3> 
            <br>
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" class="img-responsive">                      
            <br>
            <h3><?php echo $row['precio']; ?></h3> 
            <br>            
        </div>
<?php
    }
    if ($elementos == 5) {
        $elementos = 0;
?>
    </div>
<?php
    }
}
?>