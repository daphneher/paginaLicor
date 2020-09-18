<?php
include_once "mostrar_errores.inc.php";

$titulo = "Vinos - Home";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>

<!-- Banner -->
<div class="slideshow-container" id="banner">
    <?php                
    $query = "SELECT * FROM ".TABLA_BANNER;
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
    ?>
        <div class="mySlides fade">
          <!-- Extraer img de db -->
          <img class="imagenes_banner" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>">
        </div>
    <?php
    }
    ?>

    <i class="fa fa-angle-right fa-2x next" aria-hidden="true" onclick="plusSlides(1)"></i>
    <i class="fa fa-angle-left fa-2x prev" aria-hidden="true" onclick="plusSlides(-1)"></i>
</div>
<!-- Fin Banner -->

<!-- Main -->
<div class="container" id="nosotros">
    <h2>Nosotros</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
</div>

<!-- Nuestros Vinos -->
<div class="container" id="nuestros-vinos">

    <div class="row">
        <div class="col-md-4">
            <p style="color:#f9af25;text-align:center;font-size:3em;margin-bottom:0em;">
                Nuestros Vinos
            </p>
            <img class="img-responsive" style="margin:auto;width:40em;" src="<?php echo RUTA_IMG ?>separador.jpg">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-8">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-md-4">
            <img src="<?php echo RUTA_IMG ?>copas-de-vinos.jpg" id="copas" class="img-thumbnail" alt="Snow" style="width:100%;">
        </div>
    </div>

    <br>   

    <button class="accordion">Vino Tinto</button>
    <div class="panel">
        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <center style="margin: 2em">
            <a type="button" class="btn btn-default" href="<?php echo VARIEDAD."?vino=tinto"; ?>" >Ver Tinto</a>       
        </center>
        
    </div>

    <button class="accordion">Vino Blanco</button>
    <div class="panel">
        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <center style="margin: 2em">
            <a type="button" class="btn btn-default" href="<?php echo VARIEDAD."?vino=blanco"; ?>" >Ver Blanco</a>
        </center>
        
    </div>

    <button class="accordion">Vino Rosado</button>
    <div class="panel">
        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <center style="margin: 2em">
            <a type="button" class="btn btn-default" href="<?php echo VARIEDAD."?vino=rosa"; ?>" >Ver Rosa</a>
        </center>
        
    </div>
    <br>
</div>   
<!-- Fin Nuestros Vinos -->

<div class="container" id="contacto" >
    <h2>Contacto</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
</div>
<br>
<!-- BLOG -->
<div class="container-fluid" id="blog" style="background-color:#470f11; color:white;">
    <h2>Blog</h2>
    <p style="font-size: 1.3em;">Vea nuestros últimos artículos relacionados al vino</p>
<?php
    $paginacion = 0;
    $titulo = 0;
    $i;
    for ($i=0; $i < 5; $i++) { 
        $paginacion++;
        $titulo++;
?>
    <div class="row paginacion_blog">
        <div class="col-md-4">
            <h2>Lorem <?php echo $titulo; $titulo++;?></h2>
            <br>
            <center>
                <img src="img/login.jpg" id="img_blog" class="img-responsive img-thumbnail">
            </center>
            <?php
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $fecha = date("d-m-Y");
            ?>
            <p style="margin-top: 0.5em;"><?php echo $fecha; ?></p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <center>
                <button type="button" class="btn btn-default">Ir al post</button>
            </center>
        </div>
        <div class="col-md-4">
            <h2>Lorem <?php echo $titulo; $titulo++;?></h2>
            <br>
            <center>
                <img src="img/login.jpg" id="img_blog" class="img-responsive img-thumbnail">
            </center>
            <?php
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $fecha = date("d-m-Y");
            ?>
            <p style="margin-top: 0.5em;"><?php echo $fecha; ?></p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <center>
                <button type="button" class="btn btn-default">Ir al post</button>
            </center>
        </div>
        <div class="col-md-4">
            <h2>Lorem <?php echo $titulo;?></h2>
            <br>
            <center>
                <img src="img/login.jpg" id="img_blog" class="img-responsive img-thumbnail">
            </center>
            <?php
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $fecha = date("d-m-Y");
            ?>
            <p style="margin-top: 0.5em;"><?php echo $fecha; ?></p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <center>
                <button type="button" class="btn btn-default">Ir al post</button>
            </center>    
        </div>
    </div>
<?php
    }
?>
    <br><br>

    <center>
        <a type="button" class="btn btn-default" href="<?php echo BLOG ?>" >Ver todos los Blogs</a>
    </center>
    <center>
        <ul class="pagination">
            <?php
            $i = 0;
            if ($paginacion > 5) { $paginacion = 5; }

            while ($paginacion != 0) {
                $paginacion--;
                $i++;

            ?>
            <li onclick="cambiarPagina(<?php echo $i ?>)">
                <a href="#blog" style="color:black;"><?php echo $i; ?></a>
            </li>
            <?php
            }
            ?>
        </ul>
    </center>     
</div>

<script>
var paginacion = document.getElementsByClassName("paginacion_blog");
for (i = 0; i < paginacion.length; i++) {
    paginacion[i].style.display = "none";
}
paginacion[0].style.display = "block";

function cambiarPagina(n) {
    var paginacion = document.getElementsByClassName("paginacion_blog");
    for (i = 0; i < paginacion.length; i++) {
        paginacion[i].style.display = "none";
    }
    paginacion[n-1].style.display = "block";
}
</script>
<!-- FIN DE BLOG -->


<!-- Fin Main -->

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
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Inicio</a>
        <a href="#nosotros">Nosotros</a>
        <a href="#contacto">Contacto</a>
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Nuestros Vinos  </a>
            <ul id="submenu" class="dropdown-menu">
                <li><a id="btnSubmenu" class="dropdown-item" href="<?php echo VARIEDAD."?vino=tinto"; ?>" > Vino Tinto </a></li>
                <li><a id="btnSubmenu" class="dropdown-item" href="<?php echo VARIEDAD."?vino=blanco"; ?>" > Vino Blanco </a></li>
                <li><a id="btnSubmenu" class="dropdown-item" href="<?php echo VARIEDAD."?vino=rosa"; ?>" > Vino Rosa </a></li>
                <li><a id="btnSubmenu" class="dropdown-item" href="#" > Otros Productos </a></li>
          </ul>
        <a href="#blog">Blog</a>
    </div>
</div>
<div id="menu" >
    <span id="btn-menu" class="btnMenu" onclick="openNav()">&#9776; Menú</span>
</div> 
<!-- Fin Botón Menú -->

<?php 
include_once "plantillas/home-js.inc.php"; 
include_once "plantillas/documento-cierre.inc.php";
?>        
