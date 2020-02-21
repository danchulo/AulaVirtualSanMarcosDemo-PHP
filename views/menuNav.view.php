<div class="col-sm-3 well" id="navegacion">
            <div id="perfil">
                <p><a href="#">Mi Perfil</a></p>
                <img src="<?php echo RUTA; ?>/imagenes/<?php echo $_SESSION['foto']; ?>" class="img-circle" height="100" width="120" alt="Avatar">
            </div>
            <div class="menu text-left">
                <div class="scrollable">
                    <ul class="nav-lateral ">
                        <li ><a href="<?php echo RUTA; ?>index.php" ><img src="<?php echo RUTA; ?>imagenes/icon-informacion.png" class="b"> Area personal</a></li>
                        <li ><a href="<?php echo RUTA; ?>paginas/inicioSitio.php" ><img src="<?php echo RUTA; ?>imagenes/icon-inicio.png" class="b">Inicio del sitio</a></li>
                        <li class="submenu"><a href="#"><img src="<?php echo RUTA; ?>imagenes/icon-catalogo.png" class="b">Paginas del sitio <span class="glyphicon glyphicon-chevron-down" id="c"></span></a>
                            <ul>
                                <li ><a href="<?php echo RUTA; ?>paginas/blogSitio.php" ><img src="<?php echo RUTA; ?>imagenes/añadir.png" class="b">Blogs del sitio</a></li>
                                <li ><a href="#tab4" ><img src="<?php echo RUTA; ?>imagenes/ojo.png" class="b">Novedades del sitio</a></li>
                                <li ><a href="#tab4" ><img src="<?php echo RUTA; ?>imagenes/ojo.png" class="b">Calendario</a></li>
                            </ul>
                        </li>
                        <li class="submenu"><a href="#"><img src="<?php echo RUTA; ?>imagenes/icon-nuevo.png" class="b">Mis cursos<span class="glyphicon glyphicon-chevron-down" id="d"></span></a>
                            <ul>
                                <li ><a href="<?php echo RUTA; ?>paginas/ciclos.php"><img src="<?php echo RUTA; ?>imagenes/añadir.png" class="b">EAP SISTEMAS 2018-2</a></li>
                                <li ><a href="#tab6"><img src="<?php echo RUTA; ?>imagenes/ojo.png" class="b">EAP SISTEMAS 2018-1</a></li>
                            </ul>
                        </li>
                        <li class="submenu"><a href="#"><img src="<?php echo RUTA; ?>imagenes/icon-nuevo.png" class="b">Funcionalidades<span class="glyphicon glyphicon-chevron-down" id="e"></span></a>
                            <ul>
                                <li ><a href="<?php echo RUTA; ?>paginas/agregarClase.php"><img src="<?php echo RUTA; ?>imagenes/añadir.png" class="b"><?php if($_SESSION['tipo']=='profesor'){echo "Agregar Clase";}else{ echo "Ver Clase";} ?></a></li>
                                <li ><a href="<?php echo RUTA; ?>paginas/agregarTarea.php"><img src="<?php echo RUTA; ?>imagenes/añadir.png" class="b"><?php if($_SESSION['tipo']=='profesor'){echo "Agregar Tarea";}else{ echo "Ver Tarea";} ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="well" style="border: 2px solid #0A337F; -webkit-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
                box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);">
                <p><span class="glyphicon glyphicon-hdd"></span> BIBLIOTECA VIRTUAL</p>
                <p><img src="<?php echo RUTA; ?>imagenes/biblio-virtual.png" alt=""></p>
                <ul class="biblioteca">
                    <li><a href="#"><strong>Revistas Cientificas</strong></a></li>
                    <li><a href="#"><strong>Catalogo Electronico</strong></a></li>
                    <li><a href="#"><strong>Revistas de invest</strong></a></li>
                    <li><a href="#"><strong>Revista RISI</strong></a></li>
                    <li><a href="#"><strong>Biblioteca CONCYTEC</strong></a></li>
                </ul>
            </div>


            <div class="well" style="border: 2px solid #0A337F; -webkit-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
                box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);">
                <p><span class="glyphicon glyphicon-globe " ></span> USUARIOS EN LINEA</p>
                <div class="text-left">
                    <p><span class="glyphicon glyphicon-user"></span> Luque Tarrillo Julio  <span class="glyphicon glyphicon-comment" style="float: right"></span></p>
                    <p><span class="glyphicon glyphicon-user"></span> Perez Llacsa Pablo  <span class="glyphicon glyphicon-comment" style="float: right"></span></p>
                    <p><span class="glyphicon glyphicon-user"></span> Pampa Lobon Saul<span class="glyphicon glyphicon-comment" style="float: right"></span></p>
                </div>
            </div>
        </div>