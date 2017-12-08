<!DOCTYPE html>
<html lang="es">
<head>
	<title>ESCT16</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="shortcut icon" href="">
	<meta charset="utf-8">
</head>
<body>

<a href="control_school.php?optionc=add_student">Agregar alumno</a><br>
<a href="control_school.php?optionc=modify_student">Modificar Alumno</a><br>
<a href="control_school.php?optionc=delete_student">Eliminar Alumno</a><br>
<a href="control_school.php?optionc=listas">imprimir listas</a><br>
<a href="control_school.php?optionc=asig_subject">asignar materia</a><br>
<a href="control_school.php?optionc=asig_group">asignar group</a><br>
<a href="control_school.php?optionc=add_group">agregar grupo</a><br>
<a href="control_school.php?optionc=add_subject">agregar materia</a><br>
<a href="control_school.php?optionc=add_teacher">Agregar Profesor</a><br>
<a href="control_school.php?optionc=modify_teacher">Modificar profesor</a><br>
<hr>

<?php

require("../php/access.php");

if ($privilegesAccess==NULL) {
	echo "Session expired";
}
else if ($privilegesAccess == '2') {
	include("../php/controladores.php");
		
}

else{
	echo "No tiene los privilegios establecidos, Redireccionando ...";
	header("refresh:2; url=../index.php");
}



?>

</body>