<?php session_start();

	require '../admin/config.php';
	require '../php/funciones.php';

	comprobarSession();

	$conexion = conexion($bd_config);
	if(!$conexion){
		header('Location: ../php/error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
	
		$curso = array(
			'idCurso' => limpiarDatos($_POST['curso']),
			'nombreTarea' => limpiarDatos($_POST['nombreTarea']),	
			'descripcion' => $_POST['descripcion'], 
			'fecha_actual' => date("Y-m-d"),
			'fecha_limite' =>$_POST['fecha_limite'],
			'archivo' => $_FILES['archivo']['name'] );
		/*print_r($curso);*/

		$alumnos = obtener_alumnos_del_curso($conexion, $curso['idCurso']);
		$valores = "";

		foreach ($alumnos as $alumno) {

			$valores = array(
			':idDetalle_curso' => $alumno['idDetalle_curso'],
			':nombreTarea' => $curso['nombreTarea'],	
			':descripcion' => $curso['descripcion'],
			':archivo' => $curso['archivo'],
			':estado' => 'falta',  
			':fecha_actual' => $curso['fecha_actual'],
			':fecha_limite' => $curso['fecha_limite']
			);

			ingresar_tarea($conexion, $valores);	

		};

		
		
		$carpeta_destino = '../tareas/';
		$archivo_subido = $carpeta_destino . $_FILES['archivo']['name'];
		move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo_subido);

	}

	$cursosDP = obtener_curso_de_Profesores($conexion, $_SESSION['id']);


	require '../views/agregarTarea.view.php';


 ?>