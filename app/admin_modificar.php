<?php
// Validador de Usuario
error_reporting(0); //descomentar cuando el proyecto se termino

include_once "config.inc.php";

session_start();

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '' || $varsesion !== NOMBRE_USER) {
    echo "Usted no tiene autorización";
    die();
}

include_once "conexion.php";
?>

<?php
$titulo = "Administrador - Modificar";

include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$id = $_REQUEST['id'];
$tabla = $_REQUEST['tabla'];

$query = "SELECT * FROM ".$tabla." WHERE id = '$id'";;
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();
?>

<br><br>
<div class="container">
    <center style="background-color:#7f7f7f; color:black; padding:1em; width:60%; margin:auto;">
        <form method="POST" enctype="multipart/form-data" action="<?php echo ADMIN_PROCESO_MODIFICAR."?id=".$row['id']."&tabla=".$tabla;?>">

            <h3>Imagen actual</h3>
            <img style="height: 12em;margin: auto;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">

            <br><br>
            <h4 style="text-align:left;">Nombre:</h4> 
            <input style="background-color: white;" type="text" REQUIRED name="nombre" placeholder="" value="<?php echo $row['nombre']; ?>">  

            <?php
            if ($tabla !== TABLA_BANNER) {
            ?> 
            <br><br>
            <h4 style="text-align:left;">Descripción:</h4> 
            <input style="background-color: white;" type="text" REQUIRED name="descripcion" placeholder="" value="<?php echo $row['descripcion']; ?>"> 

            <br><br>
            <h4 style="text-align:left;">Precio:</h4> 
            <input style="background-color: white;" type="text" REQUIRED name="precio" placeholder="" value="<?php echo $row['precio']; ?>"> 
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

