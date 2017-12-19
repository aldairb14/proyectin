<?php

session_start();
require("conexion.php");

//datos obtenidos por el login
$user 		= $_POST["user"];
$password  	= $_POST["password"];

$conexionDB	= new ConectarDB();
$conexion 	= @$conexionDB->conectar();


if(!$conexion){
	header("location: ../index.php");
}
else{

	$query = "select privilegios, id_usuarios from usuarios where usuario='$user' and password=md5('$password')";
	$consulta = mysqli_query($conexion, $query);
	if (mysqli_num_rows($consulta)==1) {
		$result = mysqli_fetch_array($consulta);
		$privileges = $result[0];

		//datos para almacedar en variables session para su previo uso
		$_SESSION["id_user"]	= $result[1];
		$_SESSION["user"]		= $user;
		//$_SESSION["password"] 	= $password;
		$_SESSION["privileges"]	= $privileges;


		switch ($privileges) {
			case '1':
				header("location: ../view/admin.php");
				break;
			
			case '2':
				header("location: ../view/control_school.php");
				break;

			case '3':
				header("location: ../view/docentes.php");
				break;

		}

	}
	else{
			echo '<script type="text/javascript">
									  alert("Usuario o contraseña incorrecta");
									</script>';
		
		header("refresh: 0; url=../index.php");	}
	
}

mysqli_close($conexion);

?>