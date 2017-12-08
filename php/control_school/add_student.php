<?php

$nombre 		= $_POST["name"];
$apellidoPaterno= $_POST["apepat"];
$apellidoMaterno= $_POST["apemat"];
$grupo			= $_POST["grupo"];

if(empty($nombre) || empty($apellidoPaterno) || empty($apellidoMaterno)){
	echo "Todos los compos son obligatorios y no deben estar vacios";
	header("refresh: 3; url=../../view/control_school.php?optionc=add_student");
}
else{

	//require("../access.php");
	require("../conexion.php");
	$addConexion = new ConectarDB();
	//$addConexion->establecerUserPass($userAccess, $passwordAccess);
	$conexion = @$addConexion->conectar();

	if (!$conexion) {
		echo "No se pudo realizar la conexion";
		header("refresh: 3; url=../../view/control_school.php?optionc=add_student");
	}
	else{

		$query = mysqli_query($conexion, "insert into alumnos (nombres_alumno, apellidoP, apellidoM, id_grupo) values ('$nombre','$apellidoPaterno','$apellidoMaterno', $grupo)");
		if (!$query) {
			echo "No se agrego el alumno, intente nuevamente";
			header("refresh: 3; url=../../view/control_school.php?optionc=add_student");
		}
		else{
			echo "Alumno agregado";
			header("refresh: 1; url=../../view/control_school.php?optionc=add_student");
		}
	}
}


?>