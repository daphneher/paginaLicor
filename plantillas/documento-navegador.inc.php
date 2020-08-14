         <nav id="navegador" class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button id="botonNav" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="<?php echo SERVIDOR ?>">SOLUTEC SMART</a>
                </div>
                
                <!-- Menues -->
                <div id="navbar1" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" style="margin-bottom: 0px; margin-top: 0px;">
                        <li id="menues" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Producto <b class="caret"></b></a>    
                            <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px;border-top-width: 0px;border-bottom-width: 0px;">
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Impresoras</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_IMPRESORAS_LASER ?>">Impresoras Láser</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_IMPRESORAS_MULTIFUNCION ?>">Impresoras Multifunción</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_SUMINISTROS_DE_TINTA ?>">Suministros de Tinta</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_ESCANERES ?>">Escáneres</a></li>
                                    </ul>
                                </li>      
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Computadoras</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_PORTATILES ?>">Portátiles</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_DESKTOPS ?>">Desktops</a></li>
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Software</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_LICENCIAMIENTO_PRODUCTIVIDAD ?>">Licenciamiento de Productividad</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_LICENCIAMIENTO_SEGURIDAD ?>">Licenciamiento de Seguridad</a></li>
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dispositivos Móviles</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_TABLETS ?>">Tablets</a></li>                                        
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Accesorios</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_AURICULARES_PC ?>">Auriculares para PC</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_MOUSES ?>">Mouses</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_TECLADOS ?>">Teclados</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_GAMERS ?>">Gamers</a></li>
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                            </ul>
                        </li>
                        <li id="separadorPrincipal" role="separator" class="divider"></li>
                        <li id="menues" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Servicios y Soluciones <b class="caret"></b></a>
                            <ul class="dropdown-menu" style="padding-top: 0px;padding-bottom: 0px;border-top-width: 0px;border-bottom-width: 0px;">
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li><a href="<?php echo RUTA_WEB_BUSINESS ?>">Web Business</a></li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Consultoria</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_INTELIGENCIA_NEGOCIOS ?>">Inteligencia de Negocios</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_LICENCIAMIENTO ?>">Licenciamiento</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_MARCOS_NORMATIVAS ?>">Marcos y Normativas</a></li>
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Teletrabajo</a>
                                   <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_TELETRABAJO ?>">Teletrabajo</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_HERRAMIENTAS_ADECUADAS ?>">Las Herramientas Adecuadas</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_SEGURIDAD ?>">Seguridad</a></li>
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>           
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Productividad y Colaboración</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_COMUNICACIONES_UNIFICADAS ?>">Comunicaciones Unificadas</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_INTRANET_BASE ?>">Intranet Base</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_SOFTWARE_PRODUCTIVIDAD ?>">Software de Productividad</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_RED_SOCIAL_CORPORATIVA ?>">Red Social Corporativa</a></li>
                                    </ul>
                                </li>
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Cloud</a>
                                    <ul class="dropdown-menu">
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_CONSULTORIA_CLOUD ?>">Consultoría Cloud</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_VIRTUALIZACION_SERVIDORES ?>">Datacenter y Virtualización</a></li>
                                        <li><a style="padding-left: 35px;" href="<?php echo RUTA_SERVICIOS_INFRAESTRUCTURA ?>">Servicios de Infraestructura</a></li>
                                    </ul>
                                </li>                                
                                <li id="separadorSecundario" role="separator" class="divider"></li>
                            </ul>
                        </li>
                        <li id="separadorPrincipal" role="separator" class="divider"></li>
                        <li id="menues"><a href="<?php echo RUTA_NOSOTROS ?>">Nosotros</a></li>
                        <li id="separadorPrincipal" role="separator" class="divider"></li>
                        <li id="menues"><a href="<?php echo RUTA_CONTACTO ?>">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
