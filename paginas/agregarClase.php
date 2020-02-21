<?php session_start();

	require '../admin/config.php';
	require '../php/funciones.php';

	comprobarSession();

	$conexion = conexion($bd_config);
	if(!$conexion){
		header('Location: ../php/error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
		$curso = limpiarDatos($_POST['curso']);
		echo $curso;
		$semana = $_POST['semana'];
		$nombreClase = limpiarDatos($_POST['nombreClase']);
		$descripcion = $_POST['descripcion'];

	
		$clase = array(
			':idCurso' => $curso,	/*falta agregar id de los cursos*/
			':semana' => $semana, 
			':nombreClase' => $nombreClase,	
			':descripcion' => $descripcion, 
			':archivo' => $_FILES['archivo']['name'] );

		ingresar_clase($conexion, $clase);
		
		$carpeta_destino = '../clases/';
		$archivo_subido = $carpeta_destino . $_FILES['archivo']['name'];
		move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_subido);

	}


	$cursosDP = obtener_curso_de_Profesores($conexion, $_SESSION['id']);


	require '../views/agregarClase.view.php';


 ?>