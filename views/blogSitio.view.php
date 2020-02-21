<?php require "../views/header.view.php"; ?>

<div class="container text-center" style="margin-top:10px;">
    <div class=="row">
    	
        <?php require "../views/menuNav.view.php" ?>

        <div class="col-sm-9">

            <div class="row">
                <div class="col-sm-12" >
                    <div class="panel panel-primary">
                        <div class="panel-heading text-left">
                            <p><span class="glyphicon glyphicon-pencil"></span> Publicacion  <span class="glyphicon glyphicon-camera" style="margin-left: 20px"></span> Fotos</p>
                        </div>
                        <div class="panel-body"></div>
                        <div class="panel-footer panel-primary text-left">
                            <ul>
                                <li><span class="glyphicon glyphicon-bold"></span></li>
                                <li><span class="glyphicon glyphicon-italic"></span></li>
                                <li><span class="glyphicon glyphicon-paperclip"></span></li>
                                <li><span class="glyphicon glyphicon-link"></span></li>
                                <li><span class="glyphicon glyphicon-align-left"></span></li>
                                <li><span class="glyphicon glyphicon-align-right"></span></li>
                                <li><span class="glyphicon glyphicon-list"></span></li>
                                <li><span class="glyphicon glyphicon-picture"></span></li>
                                <li style="float: right;"><button type="button" class="btn btn-primary" >Compartir</button></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-sm-12" >
                    <div class="well" style="background: white; ">
                        <div class="col-sm-12">
                            <p style="float: left; font-size: medium; color: #0A337F"><strong>Blog del Sitio</strong></p>
                            <hr>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <ul>
                                        <li style="float: left"><img src="../imagenes/yañez.png" class="img-circle" height="40" width="40" alt=""> <strong>     Prof. Yañez Carlos</strong></li>
                                        <li style="float: right"><span class="glyphicon glyphicon-calendar" style="float: right"> 10/11/2018</span></li>
                                    </ul>
                                </div>
                                <div class="panel-body">Panel Content</div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                <ul>
                                    <li style="float: left"><img src="../imagenes/martinluque.png" class="img-circle" height="40" width="40" alt=""> <strong> Est. Luque Martin</strong></li>
                                    <li style="float: right"><span class="glyphicon glyphicon-calendar" style="float: right"> 10/11/2018</span></li>
                                </ul>
                                </div>
                                <div class="panel-body">Panel Content</div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                <ul>
                                    <li style="float: left"><img src="../imagenes/pabloperez.png" class="img-circle" height="40" width="40" alt=""> <strong> Est. Perez Pablo</strong></li>
                                    <li style="float: right"><span class="glyphicon glyphicon-calendar" style="float: right"> 10/11/2018</span></li>
                                </ul>
                                </div>
                                <div class="panel-body">Panel Content</div>
                            </div>
                        </div>
                    </div>
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
<script src="../comportamiento/menu.js"></script>

</body>
</html>
