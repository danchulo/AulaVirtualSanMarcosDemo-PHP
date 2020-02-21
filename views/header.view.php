<!DOCTYPE html>
<html lang="es">
<head>
    <title>Aula Virtual - FISI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>diseño/aula.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body style="background: #E0E9FA">

<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo RUTA; ?>"><img src="<?php echo RUTA; ?>imagenes/logo-fisi-principal.png" class="img-circle" height="30" width="30" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo RUTA; ?>"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-flag"></span> Idioma<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-sort-by-alphabet"></span> Español-Internacional(es)</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-sort-by-alphabet"></span> English(en)</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-briefcase"></span> Mi Lista de Cursos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Area Personal</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Lenguajes y Compiladores - G3</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Interfaz Hombre Computador - G2</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Investigacion Operativa II - G2</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Programacion Paralela - G2</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Taller de Construccion de Sistemas - G1</a></li>
                    </ul>
                </li>
                <form class="navbar-form navbar-left" action="/action_page.php">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Mensajes</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellidos']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellidos']; ?></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Blog</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Calendario</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-folder-close"></span> Mensajes</a></li>
                        <li><a href="<?php echo RUTA; ?>php/cerrar.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Ayuda</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo RUTA; ?>php/cerrar.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="banner">
    <ul>
        <li class="redes-sociales">Redes Sociales</li>
        <img src="<?php echo RUTA; ?>imagenes/internet.png"  style="float: right; margin-top: 35px; margin-right: -120px" alt="">
        <img src="<?php echo RUTA; ?>imagenes/facebook1.png"  style="float: right; margin-top: 35px;margin-right: -80px" alt="">
        <li><a href="<?php echo RUTA; ?>paginas/inicioSitio.php"><img src="<?php echo RUTA; ?>imagenes/logo-fisi.png" alt="logo-fisi" class="logo-fisi"></a></li>
    </ul>

</div>