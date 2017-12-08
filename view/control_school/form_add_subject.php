
<?php
require("../php/conexion.php");
	$addConexion = new ConectarDB();
	//$addConexion->establecerUserPass($userAccess, $passwordAccess);
	$conexion = @$addConexion->conectar();

	if (!$conexion) {
		echo "No es posible agregar alumnos, contacta al administrador";
		header("refresh: 3; url=../control_school.php");
	}
	else{

		

?>
<form action="../php/control_school/add_subject.php" method="POST">
	
	Asignatura: <input type="text" name="asignatura"><br>
	Profesor: <select name="profesor">

<?php

		$query = mysqli_query($conexion, "select id_profesor, nombres_profesor, apellidos_profesor from profesores");
		while ($row=mysqli_fetch_array($query)) {
			echo "<option value='$row[0]'>$row[1] $row[2]</option>";
		}
	}

?>
	</select><br>
		Grupo: <select name="grupo">
<?php
		$query = mysqli_query($conexion, "select id_grupo, grado, grupo, turno, periodo from grupos order by periodo desc");
		while ($row=mysqli_fetch_array($query)) {
			if ($row[3]=='v') {
				$row[3]='Vespertino';
			}
			else{
				$row[3]='Matutino';
			}
			echo "<option value='$row[0]'>$row[1] $row[2] turno $row[3] periodo $row[4]</option>";
		}
	

?>

	</select>
	<input type="submit" name="addsubject">

</form>