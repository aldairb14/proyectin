<?php 

require("../conexion.php");
//$conexion =conexion();
	$n = $_POST['nombres'];
	$a = $_POST['apellidos'];
	$u = $_POST['usuario'];
	$p = $_POST['pass'];
	$e = $_POST['estado'];
	$pr = $_POST['privilegios'];


	$sql="insert into usuarios (usuario,password,nombres,apellidos,estado,privilegios) values ('$u','$p','$n','$a','$e','$pr')";

	$resultv=mysqli_query($conexion,$sql);
 ?>