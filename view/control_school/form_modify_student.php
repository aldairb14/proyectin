<?php

	require("../php/conexion.php");
	$addConexion = new ConectarDB();
	//$addConexion->establecerUserPass($userAccess, $passwordAccess);
	$conexion = @$addConexion->conectar();

	if (!$conexion) {
		echo "No es posible modificar alumno, contacta al administrador";
		header("refresh: 3; url=../control_school.php");
	}
	else{

		$query = mysqli_query($conexion, "select id_grupo, grado, grupo, turno, periodo from grupos order by periodo desc");

?>
<form action="../php/control_school/modify_student.php" method="POST">

	Nombres: <input type="text" name="name"><br>
	Apellido Paterno <input type="text" name="apepat"><br>
	Apellido Materno <input type="text" name="apemat"><br>
	Grupo: <select name="grupo">
<?php

		while ($row=mysqli_fetch_array($query)) {
			if ($row[3]=='v') {
				$row[3]='Vespertino';
			}
			else{
				$row[3]='Matutino';
			}
			echo "<option value='$row[0]'>$row[1] $row[2] turno $row[3] periodo $row[4]</option>";
		}
	}

?>

	</select>
	<input type="submit" name="modify_student">

</form>
