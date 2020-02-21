<?php require "../views/header.view.php"; ?>

<div class="container text-center" style="margin-top:10px;">
    <div class=="row">
    	
        <?php require "../views/menuNav.view.php" ?>

        <div class="col-sm-9">

            <div class="row" >
                <div class="col-sm-12" >
                    <div class="well" style="background: white; ">
                        
                        <div class="container">
                            <legend class="text-primary" style="float: top center;"><h3 style="margin-top: 10px;">AGREGAR TAREA</h3></legend>
                            <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                
                                <div class="input row" >
                                    <div class="form-group"> 
                                        <div class="col-md-3">
                                            <label class="control-label">Curso</label>
                                        </div>
                                        <div class="col-md-9 selectContainer">
                                            <div class="input-group">
                                                <span class="color-icono input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                <select name="curso" class="form-control selectpicker" >
                                                    <option value=" " >Seleccione el curso</option>
                                                    <?php foreach ($cursosDP as $cursoDP): ?>
                                                         <option value="<?php echo $cursoDP['idCurso'];?>"><?php echo $cursoDP['nombre']; ?></option>
                                                    <?php endforeach ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="input row" >
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Nombre de la Tarea</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="color-icono input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <input name="nombreTarea" placeholder="Nombre" class="form-control" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="input row" >
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Descripcion de la Tarea</label>
                                        </div>
                                            <div class="col-md-9 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="color-icono input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="descripcion" placeholder="Descripcion"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="input row" >
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Fecha limite</label>
                                        </div>
                                            <div class="col-md-3 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="color-icono input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <input name="fecha_limite" placeholder="Nombre" class="form-control" type="date" min="<?php echo date("Y-m-d");?>" required>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <div class="input row" >
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Adjuntar un archivo</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <input type="file" id="ejemplo_archivo_1" name="archivo">
                                            <p class="help-block">Ejemplo de texto de ayuda.</p>
                                        </div>
                                     </div>
                                </div>

                              <button type="submit" class="btn btn-default">Subir Tarea</button>
                            </form>
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