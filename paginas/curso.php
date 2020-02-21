<?php session_start();

	require '../admin/config.php';
	require '../php/funciones.php';

	comprobarSession();
	
	$conexion = conexion($bd_config);
	$id_curso = id_curso($_GET['id']);

	if (!$conexion) {
		header('Location: ../php/error.php');
	}

	if(empty($id_curso)){
		header('Location:../index.php');
	}
	/*PENSAR PONER CUADNO NO EXISTE EL ID*/
	$clases = obtener_clases_por_id($conexion, $id_curso);
	print_r($clases);


	require "../views/curso.view.php";


 ?>