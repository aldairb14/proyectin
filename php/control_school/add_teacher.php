<?php

$name 		= $_POST["name"];
$lastname 	= $_POST["lastname"];
$uuid 		= uniqid();
if (empty($name) || empty($lastname)) {
	echo "Todos los compos son obligatorios y no deben estar vacios";
	header("refresh: 3; url=../../view/control_school.php?optionc=add_teacher");
}
else{
	//require("../access.php");
	require("../conexion.php");
	$addConexion = new ConectarDB();
	//$addConexion->establecerUserPass($userAccess, $passwordAccess);
	$conexion = @$addConexion->conectar();
	if (!$conexion) {
		echo "No se pudo realizar la conexion";
		header("refresh: 3; url=../../view/control_school.php?optionc=add_teacher");
	}
	else{
		$query = mysqli_query($conexion, "insert into profesores (nombres_profesor, apellidos_profesor, uuid_profesor) values ('$name', '$lastname', '$uuid')");
		if (!$query) {
			echo "No se agrego el profesor, intente nuevamente";
			header("refresh: 3; url=../../view/control_school.php?optionc=add_teacher");
		}
		else{
			echo "<script type='text/javascript'>alert('UUID del profesor: $uuid, por favor de le este uuid al profesor');</script>";
			echo "Profesor agregado";
			header("refresh: 1; url=../../view/control_school.php?optionc=add_teacher");
		}
	}
}





?>