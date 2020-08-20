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
$titulo = "Administrador General";
include_once("plantillas/documento-apertura.inc.php");
include_once("plantillas/admin-navegador.inc.php");
?>

<div class="container"  style="text-align:center; background-image:url('img/fondo-admin.jpg');">
    <h2><b>Seleccione la tabla de imágenes que desea administrar</b></h2>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Banner</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_BANNER; ?>" >
                    Subir Nueva Imagen
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_BANNER; ?>">
                    Ver tabla
                </a>
            </div>            
        </div>  
        <div class="col-md-3">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Vino Tinto</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_VINO_TINTO; ?>" >
                    Subir Nueva Imagen
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_VINO_TINTO; ?>">
                    Ver tabla
                </a>
            </div>            
        </div> 
        <div class="col-md-3">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Vino Blanco</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_VINO_BLANCO; ?>" >
                    Subir Nueva Imagen
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_VINO_BLANCO; ?>">
                    Ver tabla
                </a>
            </div>            
        </div> 
        <div class="col-md-3">
            <div id="jumbotrom-admin" class="jumbotrom">
                <h3><b>Tabla Banner</b></h3>
                <hr id="separador-admin">
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_SUBIR."?tabla=".TABLA_VINO_ROSA; ?>" >
                    Subir Nueva Imagen
                </a>
                <br><br>
                <a type="button" class="btn btn-primary" href="<?php echo ADMIN_MOSTRAR."?tabla=".TABLA_VINO_ROSA; ?>">
                    Ver tabla
                </a>
            </div>            
        </div>               
    </div>
    <br><br>
</div>

<?php
include_once "plantillas/documento-cierre.inc.php";
?>