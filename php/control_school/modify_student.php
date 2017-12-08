<?php

$nombre 		= $_POST["name"];
$apellidoPaterno= $_POST["apepat"];
$apellidoMaterno= $_POST["apemat"];
$grupo			= $_POST["grupo"];

if(empty($nombre) || empty($apellidoPaterno) || empty($apellidoMaterno)){
	echo "Todos los compos son obligatorios y no deben estar vacios";
	header("refresh: 3; url=../../view/control_school.php?optionc=modify_student");
}
else{

	//require("../access.php");
	require("../conexion.php");
	$addConexion = new ConectarDB();
	//$addConexion->establecerUserPass($userAccess, $passwordAccess);
	$conexion = @$addConexion->conectar();

	if (!$conexion) {
		echo "No se pudo realizar la conexion";
		header("refresh: 3; url=../../view/control_school.php?optionc=modify_student");
	}
	else{
			$query= mysqli_query($conexion, "select nombres_alumno from alumnos where nombres_alumno='$nombre'");
			if (mysqli_num_rows($query)==1) {

					$query = mysqli_query($conexion, "update alumnos set nombres_alumno = '$nombre', apellidoP = '$apellidoPaterno', apellidoM = '$apellidoMaterno', id_grupo = '$grupo' where  nombres_alumno = '$nombre'");
					if (!$query) {
						echo "No se modifico el alumno, intente nuevamente";
						header("refresh: 3; url=../../view/control_school.php?optionc=modify_student");
					}
					else{
						echo "Alumno Modificado";
						header("refresh: 1; url=../../view/control_school.php?optionc=modify_student");
					}
		}
	}
}


?>
