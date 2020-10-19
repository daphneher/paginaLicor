<?php
include_once "mostrar_errores.inc.php";

$titulo = "Vinos - Home";

include_once "plantillas/documento-apertura.inc.php";
include_once "plantillas/encabezado.inc.php";
?>
<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-12 col-sm-12">
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
        </div>
    </div>
</div>


<!-- Nuestros Vinos -->
<div class="container" id="nuestros-vinos">

    <div class="row">
        <div class="col-md-4">
            <h2 id="titulo-nuestros-vinos">Tienda</h2>
            <img class="img-responsive" id="sep-nuestros-vinos" src="<?php echo RUTA_IMG ?>separador.jpg">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-8">
            <p id="texto-nuestros-vinos">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-md-4">
            <img src="<?php echo RUTA_IMG ?>copas-de-vinos.jpg" id="copas" class="img-thumbnail" style="width:100%;">
        </div>
    </div>
    <div class="row">
        <div id="filtro" >
            <h5 id="tit-filtro">FILTRAR POR TIPO</h5>
            <select id="ctg" name="categoria">
                <option value="" selected="selected">Filtrar por tipo</option>
                <option value="Tinto">Vino tinto</option>
                <option value="Blanco">Vino blanco</option>
                <option value="Rosado">Vino rosado</option>
                <option value="Espumoso">Espumoso</option>
            </select>
        </div>
        <div  id="filtro" >
            <h5 id="tit-filtro">FILTRAR POR CEPA</h5>
            <select id="cep" name="cepa">

                <option value="" selected="selected">Filtrar por cepa</option>
                <option value="CabernetS">Cabernet Sauvignon</option>
                <option value="Malbec">Malbec</option>
                <option value="Merlot">Vino rosado</option>
                <option value="Syrah">Syrah</option>
                <option value="PinotN">Pinot Noir</option>
                <option value="Sangiovese">Sangiovese</option>
                <option value="Bonarda">Bonarda</option>
                <option value="Tempranillo">Tempranillo</option>
                <option value="SauvignonB">Sauvignon Blanc</option>
                <option value="Semillon">Semillón</option>
                <option value="Chardonnay">Chardonnay</option>
                <option value="Torrontes">Torrontés</option>
                <option value="Chenin">Chenin</option>
                <option value="Riesling">Riesling</option>
                <option value="Viognier">Viognier</option>

            </select>
        </div>
        <div id="filtro" >
            <h5 id="tit-filtro">FILTRAR POR PAÍS</h5>
            <select id="pai" name="pais">
                <option value="" selected="selected">filtrar por país</option>
                <option value="Austria">Austria</option>
                <option value="Argentina">Argentina</option>
                <option value="Chile">Chile</option>
                <option value="Espania">España</option>
                <option value="EstadosU">Estados Unidos</option>
                <option value="Francia">Francia</option>
                <option value="Italia">Italia</option>
                <option value="NuevaZ">Nueva Zelanda</option>
                <option value="Portugal">Portugal</option>
                <option value="Uruguay">Uruguay</option>
            </select>
        </div>
    </div>

    <br> 
    <?php
    include_once "plantillas/home-tienda.inc.php";
    ?>
    <br>


    <button class="accordion">Vino Tinto</button>
    <div class="panel">
        <br>
        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <center style="margin: 2em">
            <a type="button" class="btn btn-default" href="<?php echo VARIEDAD."?vino=tinto"; ?>" >Ver Tinto</a>       
        </center>
        
    </div>

    <button class="accordion">Vino Blanco</button>
    <div class="panel">
        <br>
        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <center style="margin: 2em">
            <a type="button" class="btn btn-default" href="<?php echo VARIEDAD."?vino=blanco"; ?>" >Ver Blanco</a>
        </center>

        <i class="fa fa-angle-right fa-2x nextP" aria-hidden="true" onclick="plusProducto(1)"></i>
        <i class="fa fa-angle-left fa-2x prevP" aria-hidden="true" onclick="plusProducto(-1)"></i>                 
    </div>      

    <div class="slideshow-container show-mobileP">        
        <center>
        <?php
        include_once "plantillas/home-tienda-celular.inc.php";
        ?>  
        </center> 
        <i class="fa fa-angle-right fa-2x nextP" aria-hidden="true" onclick="plusProductoCelular(1)"></i>
        <i class="fa fa-angle-left fa-2x prevP" aria-hidden="true" onclick="plusProductoCelular(-1)"></i>                 
    </div>     
</div>
<!-- Fin TIENDA PRODUCTO -->
<br><br>
<!-- Nosotros -->
<div style="background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.9)),url('img/fondo-nosotros.jpg');">
    <div id="nosotros" class="parallax">
        <div id="titulo-nosotros" style="overflow: auto;">
            <h2 style="margin-bottom: 0em; text-align: center;">Nosotros</h2>
            <img class="img-responsive" src="<?php echo RUTA_IMG; ?>separador.png">
        </div>
        <br>
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
</div>
<!-- Fin Nosotros -->


<!-- BLOG -->
<div class="container-fluid" id="blog" style="background-color:#470f11; color:white;">
    <h2 style="padding-left: 0.6em;">Blog</h2>
    <p style="font-size:1.3em;padding-left:1.1em;padding-right:1.1em;">
        Vea nuestros últimos artículos relacionados al vino
    </p>
    <?php
    include_once "plantillas/home-blog.inc.php";
    ?>
</div>
<!-- FIN DE BLOG -->


<!-- Redes Sociales -->
<div id="pie-de-pagina">
<?php
include_once "plantillas/documento-redes-sociales.inc.php";
?>
</div>
<!-- Fin Redes Sociales -->


<!-- Botón Menú -->
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Inicio</a>
        <a href="#nuestros-vinos"> Tienda  </a>
        <a href="#nosotros">Nosotros</a>
        <a href="#blog">Blog</a>
        <a href="#pie-de-pagina">Redes sociales</a>
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
