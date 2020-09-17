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

<div class="container" id="contacto">
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

<div class="container" id="blog">
    <h2>Blog</h2>
    <p>Vea nuestros últimos artículos relacionados al vino</p>
    <center style="margin: 2em">
        <a type="button" class="btn btn-default" href="<?php echo BLOG ?>" >Ver Blogs</a>
    </center>    
</div>
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
