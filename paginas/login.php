<?php session_start();

	require '../admin/config.php';
	require '../php/funciones.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
		$correo = limpiarDatos($_POST['correo']);
		$password = limpiarDatos($_POST['password']);

		$conexion = conexion($bd_config);

		$datos = comprobarDatos($conexion, $correo, $password);

		print_r($datos);
		if(!isset($datos['nombre'])){
			//echo "aaaaa";
			$mensaje="Usuario o Contraseña mal ingresado";
			//header('Location:../paginas/login.php');
			include_once './login.php';

		}else{
			$_SESSION['id'] = $datos['idUsuario'];
			$_SESSION['nombre'] = $datos['nombre'];
			$_SESSION['apellidos'] = $datos['apellidos'];
			$_SESSION['foto'] = $datos['foto'];
			$_SESSION['tipo'] = $datos['tipo'];
			$_SESSION['telefono'] = $datos['telefono'];
			header('Location:' . RUTA);
		}	

	}        

	require '../views/login.view.php';


 ?>