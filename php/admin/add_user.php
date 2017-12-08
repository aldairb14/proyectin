<?php


$name 		= $_POST["name"];
$lastName	= $_POST["lastname"];
$userName 	= $_POST["user"];
$pass 		= $_POST["pass"];
$passr 		= $_POST["passr"];
$privileges = $_POST["privileges"];

if (empty($name) || empty($lastName) || empty($userName) || empty($privileges)) {
	echo "Todos los compos son obligatorios y no deben estar vacios";
	header("refresh: 3; url=../../view/admin.php?optiona=add");
}
else if($pass != $passr){
	
	echo "Las contraseñas no coinciden";
	header("refresh: 3; url=../../view/admin.php?optiona=add");
}
else{
	//require("../access.php");
	require("../conexion.php");
	$addConexion = new ConectarDB();
	$conexion = @$addConexion->conectar();


	if (!$conexion) {
		echo "No se pudo realizar la conexion";
		header("refresh: 3; url=../../view/admin.php?optiona=add");
	}
	else{

		$query = mysqli_query($conexion, "select usuario from usuarios where usuario='$userName'");		
		if (mysqli_num_rows($query)==0) {
			$query = mysqli_query($conexion, " insert into usuarios (usuario, nombres, apellidos, estado, privilegios, password) values ('$userName', '$name', '$lastName', '1', '$privileges', md5('$pass'))");
			if(!$query){
				echo "No se agrego el usuario";
				header("refresh: 3; url=../../view/admin.php?optiona=add");
			}
			else{

				echo "Usuario agregado con Exito";
				header("refresh: 3; url=../../view/admin.php?optiona=add");
			}
			
		}
		else{
			echo "El usuario ya existe, intente con otro por favor";
			header("refresh: 3; url=../../view/admin.php?optiona=add");
		}

		
	}

mysqli_close($conexion);
	
}





?>