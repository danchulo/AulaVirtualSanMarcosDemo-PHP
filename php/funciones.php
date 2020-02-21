<?php 

/*ihc*/
function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

/*comprueba datos para el login*/
function comprobarDatos($conexion, $correo, $password){
	$sentencia = $conexion->prepare("SELECT * FROM usuario WHERE correo = :correo AND password = :password");
	$sentencia->execute(array(
		':correo' => $correo ,
		':password' => $password
	)
	);
	return $sentencia->fetch();

}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

/*function obtener_idDetalleCurso($conexion, $idUsuario){
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS *FROM detalle_curso WHERE detalle_curso.idUsuario = $idUsuario");
	$sentencia->execute();
	return $sentencia->fetchAll();
}*/



function obtener_profesoresCurso($conexion, $idUsuario){
	$sentencia = $conexion->prepare("SELECT c.idCurso, c.nombre, c.grupo, u.nombre nombreP, u.apellidos, u.foto FROM curso c INNER JOIN detalle_curso d ON (d.idUsuario = $idUsuario) and (d.idCurso = c.idCurso) INNER JOIN usuario u ON c.idProfesor = u.idUsuario");
	$sentencia->execute();
	return $sentencia->fetchAll();
}


function comprobarSession(){
	if (!isset($_SESSION['nombre'])) {
		header('Location: ' .  RUTA . 'paginas/login.php');
	} 
	
}

/*obtenrer cursos que enseñan los profesores*/
function obtener_curso_de_Profesores($conexion, $id){

	$sentencia = $conexion->prepare("SELECT c.idCurso, c.nombre FROM curso c WHERE idProfesor = $id");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

/*retornar enteros*/
function id_curso($id){
	return (int)limpiarDatos($id);
}

/*obtener las clases de un curso*/

function obtener_clases_por_id($conexion, $idCurso){
	$resultado = $conexion->query("SELECT * FROM clase WHERE clase.idCurso = $idCurso");
	$resultado->execute();
	return $resultado->fetchAll();
}

function ingresar_clase($conexion, $clase){

	$sentencia = $conexion->prepare("INSERT INTO clase (idCurso, semana, nombre, descripcion, fecha_subida, archivo) VALUES (:idCurso, :semana, :nombreClase, :descripcion, CURDATE(), :archivo)");
	
	$sentencia->execute($clase);
}

/*obtener alumnos del curso*/
function obtener_alumnos_del_curso($conexion ,$idCurso ){
	$sentencia = $conexion->prepare("SELECT * FROM detalle_curso d WHERE d.idcurso = $idCurso");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function ingresar_tarea($conexion, $valores){

	$sentencia = $conexion->prepare("INSERT INTO tarea (idDetalle_curso, nombre, descripcion, archivoP, estado, fecha_subida, fecha_limite) VALUES (:idDetalle_curso, :nombreTarea, :descripcion, :archivo, :estado, :fecha_actual, :fecha_limite)" );
	$sentencia->execute($valores);

}

/**********hasta aqui************/



function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}


function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}


function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";
	return $fecha;
}

function obtener_clase_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}


?>