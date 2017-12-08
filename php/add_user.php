<?php


$name 		= $_POST["name"];
$lastName	= $_POST["lastname"];
$userName 	= $_POST["user"];
$pass 		= $_POST["pass"];
$passr 		= $_POST["passr"];
$privileges = $_POST["privileges"];

if (empty($name) || empty($lastName) || empty($userName) || empty($privileges)) {
	echo "Todos los compos son obligatorios y no deben estar vacios";
	header("refresh: 3; url=../view/admin.php?optiona=add");
}
else if($pass != $passr){
	
	echo "Las contraseñas no coinciden";
	header("refresh: 3; url=../view/admin.php?optiona=add");
}
else{
	require_once("access.php");
	require_once("conexion.php");
	$addConexion = new ConectarDB();
	$addConexion->establecerUserPass($userAccess, $passwordAccess);
	$conexion = @$addConexion->conectar();


	if (!$conexion) {
		header("refresh: 3; url=../view/admin.php?optiona=add");
	}
	else{

		$query = mysqli_query($conexion, "select usuario from usuarios where usuario='$userName'");		
		if (mysqli_num_rows($query)==0) {
			$query = mysqli_query($conexion, " insert into usuarios (usuario, nombres, apellidos, estado, privilegios) values ('$userName', '$name', '$lastName', '1', '$privileges')");
			if(!$query){
				echo "No se agrego el usuario";
				header("refresh: 3; url=../view/admin.php?optiona=add");
			}
			else{

				switch ($privileges) {
					case '1':
						$query = mysqli_query($conexion, "create user '$userName'@'localhost' identified by '$pass'");
						$query1 = mysqli_query($conexion, "GRANT ALL PRIVILEGES ON * . * TO '$userName'@'localhost' WITH GRANT OPTION");
						
						break;

					case '2':
						$query = mysqli_query($conexion, "create user '$userName'@'localhost' identified by '$pass'");
						$query = mysqli_query($conexion, "GRANT SELECT, INSERT, UPDATE, DELETE ON secundaria . alumnos TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT, INSERT, UPDATE, DELETE ON secundaria . grupos TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT, INSERT, UPDATE, DELETE ON secundaria . materias TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT, INSERT, UPDATE, DELETE ON secundaria . profesores TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT, INSERT, UPDATE, DELETE ON secundaria . grupos_materias TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . usuarios TO '$userName'@'localhost'");
						break;

					case '3':
						$query = mysqli_query($conexion, "create user '$userName'@'localhost' identified by '$pass'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . alumnos TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . grupos TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . materias TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . profesores TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . grupos_materias TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT, INSERT, UPDATE, DELETE ON secundaria . calificacionesP TO '$userName'@'localhost'");
						$query = mysqli_query($conexion, "GRANT SELECT ON secundaria . usuarios TO '$userName'@'localhost'");
						break;
				}

				echo "Usuario agregado con Exito";
				header("refresh: 3; url=../view/admin.php");
			}
			
		}
		else{
			echo "El usuario ya existe, intente con otro por favor";
			header("refresh: 3; url=../view/admin.php?optiona=add");
		}

		
	}


	
}





?>