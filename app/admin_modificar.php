<?php
// Validador de Usuario
include_once "mostrar_errores.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";

$titulo = "Administrador - Modificar";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$id = $_REQUEST['id'];
$tabla = $_REQUEST['tabla'];

$query = "SELECT * FROM ".$tabla." WHERE id = '$id'";;
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();

$admin_proceso_modificar = ADMIN_PROCESO_MODIFICAR."?id=".$row['id']."&tabla=".$tabla;
?>

<br><br>
<div class="container">
    <center style="background-color:#7f7f7f; color:black; padding:1em; width:60%; margin:auto;">
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($admin_proceso_modificar); ?>">

            <h3>Imagen actual</h3>
            <img style="height: 12em;margin: auto;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">

            <br><br>
            <h4 style="text-align:left;">Nombre:</h4> 
            <input style="background-color: white;" maxlength="50" placeholder="Máximo 50 caracteres..." type="text" REQUIRED name="nombre"
            value="<?php echo $row['nombre']; ?>">  

            <?php
            if ($tabla !== TABLA_BANNER) {
            ?> 
            <br><br>
            <h4 style="text-align:left;">Descripción:</h4>  
            <p>
                <textarea style="background-color: white;;max-width: min-content;" name="descripcion" rows="4" cols="88" maxlength="250" required><?php echo $row['descripcion']; ?></textarea>
            </p>

            <br>
            <h4 style="text-align:left;">Precio:</h4> 
            <input style="background-color: white;" type="text" placeholder="Máximo 20 caracteres..." maxlength="20" REQUIRED name="precio" value="<?php echo $row['precio']; ?>"> 
            <?php
            }
            ?>       
            <br><br>
            <input type="file" REQUIRED name="imagen">
            <br><br>
            <input type="submit" name="Subir">

        </form>
        <br>
    </center>
</div>
<br><br>

<?php
include_once "plantillas/documento-cierre.inc.php";
?>

