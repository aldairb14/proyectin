<?php
$user = $_POST["user"];
$pass = $_POST["password"];
$passr= $_POST["passwordr"];



	if($pass == $passr){
		require("../conexion.php");
		$addConexion = new ConectarDB();
		$conexion = @$addConexion->conectar();
		if (!$conexion) {
			echo "Error al conectarse a la base de datos";
		}
		else{
			$query = mysqli_query($conexion, "select usuario from usuarios where usuario='$user'");
			if (mysqli_num_rows($query)==1) {
				$query = mysqli_query($conexion, "update usuarios set password=md5('$pass') where usuario='$user'");
				if (!$query) {
					echo "No se cambio la contraseña correctamente";
					header("refresh: 3; url=../../view/admin.php");
				}
				else{
					echo "Contraseña cambiada conrrectamente";
					header("refresh: 3; url=../../view/admin.php");
				}
			}
			else{
				echo "el usuario no existe";
				header("refresh: 3; url=../../view/admin.php?optiona=modify");
			}
		}
	}
	else{
		echo "Las contraseñas no coinciden";
	header("refresh: 3; url=../../view/admin.php?optiona=modify");
	}


?>