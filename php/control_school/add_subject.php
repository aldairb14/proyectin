<?php

$asignatura = $_POST["asignatura"];
$profesor = $_POST["profesor"];
$id_grupo = $_POST["grupo"];

require("../conexion.php");
	$addConexion = new ConectarDB();
	$conexion = @$addConexion->conectar();

	if (!$conexion) {
		echo "No se pudo realizar la conexion";
		header("refresh: 3; url=../../view/control_school.php?optionc=add_subject");
	}
	else{
		$query = mysqli_query($conexion, "select id_materia from materias where nombre_materia='$asignatura' and id_profesor=$profesor");
		if (mysqli_num_rows($query)==0) {
			$query = mysqli_query($conexion, "insert into materias (nombre_materia, id_profesor)values ('$asignatura', $profesor)");
			if (!$query) {
				echo "asignatura: '$asignatura', profesor: '$profesor' ";
				echo "No se agrego la asignatura, intente nuevamente si no contacte al administrador";
				//header("refresh: 3; url=../../view/control_school.php?optionc=add_subject");
			}
			else{
				$query = mysqli_query($conexion, "select id_materia from materias where nombre_materia='$asignatura' and id_profesor=$profesor");
				$row=mysqli_fetch_array($query);
				$id_profesor = $row["0"];
				$query = mysqli_query($conexion, "insert into grupos_materias values ($id_grupo, $id_profesor )");
				if (!$query) {
					echo "No se asigno la materia correctamente";
				}
			}
		}
		else{
			echo "Esta materia ya ha sido asignada a este profesor";
			header("refresh: 3; url=../../view/control_school.php?optionc=add_subject");
		}
		

	}



?>