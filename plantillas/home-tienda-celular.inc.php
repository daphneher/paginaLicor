<?php
$elementos = 0;
$query = "SELECT * FROM tabla_productos ORDER BY prioridad ASC";
$resultado = $conexion->query($query);
while($row = $resultado->fetch_assoc()){
    
    if ($elementos == 0) {
?>
    <div class="row paginacion_productos-celular">
<?php
    }
    if ($elementos < 2) {
        $elementos++;
?>
        <div class="col-md-6">
            <h3><?php echo $row['nombre']; ?></h3>
            <br>
            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" class="img-responsive">   
            <br> 
            <h3><?php echo $row['precio']; ?></h3>
        </div>
<?php
    }
    if ($elementos == 2) {
        $elementos = 0;
?>
    </div>
<?php
    }
}
?>