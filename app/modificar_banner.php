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
$titulo = "Administrador Banner";
include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");

$id = $_REQUEST['id'];

$query = "SELECT * FROM tabla_banner WHERE id = '$id'";
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();
?>

<br><br><br>
<div class="container">
    <center style="background-color: #7f7f7f;padding: 1em;width: 60%;margin: auto;">
        <form action="<?php echo PROCESO_MODIFICAR_BANNER;?>?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">

            <input style="background-color: white;"  type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>">
            <br>
            <h3>Imagen actual</h3>
            <img style="height: 12em;margin: auto;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
            <br><br>
            <input type="file" REQUIRED name="imagen">
            <br><br>
            <input type="submit" name="Subir">

        </form>
    </center>
</div>
<?php
include_once "plantillas/documento-cierre.inc.php";
?>

