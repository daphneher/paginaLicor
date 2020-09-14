<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="<?php echo SERVIDOR ?>">Inicio</a>
        <a href="<?php echo SERVIDOR ?>#nosotros">Nosotros</a>
        <a href="<?php echo SERVIDOR ?>#contacto">Contacto</a>
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Nuestros Vinos  </a>
            <ul id="submenu" class="dropdown-menu ">
                <li><a id="btnSubmenu" class="dropdown-item" href="<?php echo VARIEDAD."?vino=tinto"; ?>"> Vino Tinto </a></li>
                <li><a id="btnSubmenu" class="dropdown-item" href="<?php echo VARIEDAD."?vino=blanco"; ?>"> Vino Blanco </a></li>
                <li><a id="btnSubmenu" class="dropdown-item" href="<?php echo VARIEDAD."?vino=rosa"; ?>" > Vino Rosa </a></li>
                <li><a id="btnSubmenu" class="dropdown-item" href="#"> Otros Productos </a></li>
          </ul>
        
        <a href="<?php echo SERVIDOR; ?>#blog">Blog</a>
    </div>
</div>

<div id="menu" >
    <span id="btn-menu" class="btnMenu" onclick="openNav()">&#9776; Menú</span>
</div>