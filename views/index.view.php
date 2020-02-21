<?php require "views/header.view.php"; ?>

<div class="container text-center" style="margin-top:10px;">
    <div class=="row">
        <?php require "views/menuNav.view.php" ?>
        <div class="col-sm-6">

            <div class="row">
                <div class="col-sm-12" >
                            <div class="alert alert-success fade in text-left">
                                <p><strong><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['nombre'] . " " . $_SESSION['apellidos']; ?></strong></p>
                                Bienvenido al Aula Virtual.
                            </div>
                </div>
            </div>
            
            <?php foreach ($cursos as $curso ): ?>
                
                <div class="row" >
                    <div class="col-sm-12">
                        <div class="well"  style="background: #819ED5">
                            <div>
                                <img src="<?php echo RUTA;?>imagenes/<?php echo $curso['foto']; ?>" class="img-circle" height="100" width="100" alt="Avatar">
                                <p><strong><?php echo $curso['nombreP']; ?></strong></p>
                            </div>
                            <div>
                                <p><a href="<?php echo RUTA;?>paginas/curso.php?id=<?php echo $curso['idCurso']; ?>"><img src="<?php echo RUTA;?>imagenes/curso-online.png" alt=""><?php echo $curso['nombre']; ?> - G<?php echo $curso['grupo']; ?></a></p>
                                <p ><img src="imagenes/tarea.png" alt=""><span> </span>MODIFICARRRRRTarea Pendiente</p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-sm-3 well" style="background: white">
            <div class="thumbnail" style="border: 3px solid #0A337F; -webkit-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);">
                <p><a href="#"><img src="imagenes/agenda.png" alt=""></a></p>
                <p class="agenda bg-primary"><a href="">Agenda</a></p>
                <hr style="background: #0A337F; height: 3px ; margin: 0px">
                <div class="agenda-evento" >
                    <div class="agenda-item">
                        <p class="fecha-agenda">3 <br> NOV</p>
                        <p class="titulo-agenda"><a href="" data-toggle="modal" data-target="#myModale"> Curso Stata (nivel basico)</a></p>
                    </div>
                    <div class="text-left">
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!--Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">EVENTO: Anirvesario FISI</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                     <!--Modal body -->
                                    <div class="modal-body">
                                        <p><strong> Conferencista:</strong> Pablo Perez Llacsa</p>
                                        <p><strong> fecha:</strong> 05/11/2018</p>
                                        <p><strong> Lugar:</strong> Auditorio FISI</p>
                                        <p><strong> Capcidad:</strong> 40 asistentes</p>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                <hr style="background: #0A337F; height: 3px ; margin: 0px">
                <div class="agenda-evento2">
                    <div class="agenda-item">
                        <p class="fecha-agenda">3 <br> NOV</p>
                        <p class="titulo-agenda"><a href="" data-toggle="modal" data-target="#myModale"> Fotogrametría Área</a></p>
                    </div>
                    <div class="text-left">
                        <div class="modal" id="myModale">
                            <div class="modal-dialog">
                                <div class="modal-content">


                                    <div class="modal-header">
                                        <h4 class="modal-title">EVENTO: Conferencia TESIS</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>


                                    <div class="modal-body">
                                        <p><strong> Conferencista:</strong> Pablo Perez Llacsa</p>
                                        <p><strong> fecha:</strong> 05/11/2018</p>
                                        <p><strong> Lugar:</strong> Auditorio FISI</p>
                                        <p><strong> Capcidad:</strong> 40 asistentes</p>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                <hr style="background: #0A337F; height: 3px ; margin: 0px">
                <div class="agenda-evento3">
                     <div class="agenda-item">
                            <p class="fecha-agenda">5 <br> NOV</p>
                            <p class="titulo-agenda"><a href="" data-toggle="modal" data-target="#myModale"> Fotogrametría Área</a></p>
                     </div>
                     <div class="text-left">
                        <div class="modal" id="myModaless">
                            <div class="modal-dialog">
                                <div class="modal-content">


                                    <div class="modal-header">
                                        <h4 class="modal-title">EVENTO: Conferencia Interfaz</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>


                                    <div class="modal-body">
                                        <p><strong> Conferencista:</strong> Pablo Perez Llacsa</p>
                                        <p><strong> fecha:</strong> 05/11/2018</p>
                                        <p><strong> Lugar:</strong> Auditorio FISI</p>
                                        <p><strong> Capcidad:</strong> 40 asistentes</p>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="background: #0A337F; height: 3px ; margin: 0px">
                <div class="agenda-evento3">
                    <div class="agenda-item">
                        <p class="fecha-agenda">18 <br> NOV</p>
                        <p class="titulo-agenda"><a href="" data-toggle="modal" data-target="#myModales"> Fotogrametría Área</a></p>
                    </div>
                    <div class="text-left">
                        <div class="modal" id="myModales">
                            <div class="modal-dialog">
                                <div class="modal-content">


                                    <div class="modal-header">
                                        <h4 class="modal-title">EVENTO: Proyectos GUI</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <p><strong> Conferencista:</strong> Pablo Perez Llacsa</p>
                                        <p><strong> fecha:</strong> 05/11/2018</p>
                                        <p><strong> Lugar:</strong> Auditorio FISI</p>
                                        <p><strong> Capcidad:</strong> 40 asistentes</p>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="background: #0A337F; height: 3px ; margin: 0px">
                <div>
                    <button style="margin-left: 130px; margin-top: 10px" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-right"></span> Ver Mas</button>
                </div>
            </div>
            <div class="well" style="border: 2px solid #0A337F; -webkit-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);
box-shadow: 10px 10px 5px 0px rgba(130,130,130,1);">
                <p><span class="glyphicon glyphicon-hdd"></span> BIBLIOTECA VIRTUAL</p>
                <p><img src="imagenes/biblio-virtual.png" alt=""></p>
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
    </div>
</div>

<footer class="container-fluid text-center">
    <p></p>
    <hr>
    <p>@2018 Facultad de Ingenieria de Sistemas e Informatica</p>
    <br>
    <br>
    <br>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo RUTA; ?>comportamiento/menu.js"></script>

</body>
</html>
