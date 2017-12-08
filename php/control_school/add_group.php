<?php

$grado = $_POST["grado"];
$grupo = $_POST["grupo"];
$turno = $_POST["turno"];
$ciclo = $_POST["ciclo"];

if(empty($grado) || empty($grupo) || empty($turno) || empty($ciclo)){
	echo "Todos los compos son obligatorios y no deben estar vacios";
	header("refresh: 3; url=../../view/control_school.php?optionc=add_group");
}
else{

	//require("../access.php");
	require("../conexion.php");
	$addConexion = new ConectarDB();
	$conexion = @$addConexion->conectar();

	if (!$conexion) {
		echo "No se pudo realizar la conexion";
		header("refresh: 3; url=../../view/control_school.php?optionc=add_group");
	}
	else{

		$query = mysqli_query($conexion, "select id_grupo from grupos where grado='$grado' and grupo='$grupo' and turno='$turno' and periodo='$ciclo'");
		if (mysqli_num_rows($query)==0) {
			$query = mysqli_query($conexion, "insert into grupos (grado, grupo, turno, periodo) values ('$grado','$grupo','$turno', '$ciclo')");
			if (!$query) {
				echo "No se agrego el grupo, intente nuevamente";
				header("refresh: 3; url=../../view/control_school.php?optionc=add_group");
			}
			else{
				echo "Grupo Agregado";
				header("refresh: 1; url=../../view/control_school.php?optionc=add_group");
			}
		}
		else{
			echo "el grupo ya existe";
			header("refresh: 3; url=../../view/control_school.php?optionc=add_group");
		}

		
	}
}


?>