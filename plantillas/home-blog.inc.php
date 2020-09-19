<div class="container-fluid" id="blog" style="background-color:#470f11; color:white;">
    <h2 style="padding-left: 0.6em;">Blog</h2>
    <p style="font-size:1.3em;padding-left:1.1em;padding-right:1.1em;">
        Vea nuestros últimos artículos relacionados al vino
    </p>
<?php
    $paginacion = 0;
    $titulo = 0;
    $i;
    for ($i=0; $i < 3; $i++) { 
        $paginacion++;
        $titulo++;
?>
    <div class="container">        
        <div class="row paginacion_blog">
            <div class="col-md-4">
                <div class=" col_blog_recientes">
                    <h2>Lorem <?php echo $titulo; $titulo++;?></h2>
                    <br>
                    <center>
                        <img src="img/login.jpg" id="img_blog" class="img-responsive img-thumbnail img_blog_zoom">
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
                    <br>
                    <center>
                        <a type="button" class="btn btn-default">Ir al post</a>
                    </center>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div class=" col_blog_recientes">
                    <h2>Lorem <?php echo $titulo; $titulo++;?></h2>
                    <br>
                    <center>
                        <img src="img/login.jpg" id="img_blog" class="img-responsive img-thumbnail img_blog_zoom">
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
                    <br>
                    <center>
                        <a type="button" class="btn btn-default">Ir al post</a>
                    </center>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div class=" col_blog_recientes">
                    <h2>Lorem <?php echo $titulo;?></h2>
                    <br>
                    <center>
                        <img src="img/login.jpg" id="img_blog" class="img-responsive img-thumbnail img_blog_zoom">
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
                    <br>
                    <center>
                        <a type="button" class="btn btn-default">Ir al post</a>
                    </center>
                </div>   
            </div>
        </div>
    </div>
<?php
    }
?>
    <br><br>
    <center>
        <ul class="pagination">
            <?php
            $i = 0;
            if ($paginacion > 3) { $paginacion = 3; }

            while ($paginacion != 0) {
                $paginacion--;
                $i++;

            ?>
            <li onclick="cambiarPagina(<?php echo $i ?>)">
                <a  class="paginacion_index" href="#blog" style="color:black;">
                    <?php echo $i; ?>                    
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </center>

    <center>
        <a type="button" class="btn btn-default" href="<?php echo BLOG ?>" >Ver todos los Blogs</a>
    </center>
    <br><br>     
</div>
