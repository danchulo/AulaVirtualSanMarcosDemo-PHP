<?php session_start();

	require '../admin/config.php';
	
	session_destroy();
	$_SESSION = array(); 

	header('Location:' . RUTA)
 ?>