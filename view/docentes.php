<!DOCTYPE html>
<html lang="es">
<head>
	<title>ESCT16</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="shortcut icon" href="">
	<meta charset="utf-8">
</head>
<body>

<a href="admin.php?optiond=add_calif">Agregar Calificaciones</a><br>
<a href="admin.php?optiond=modify_calif">Modificar Calificaciones</a><br>
<a href="admin.php?optiond=generate_reports">generar Reportes</a><br>
<hr>

<?php


require("../php/access.php");

if ($privilegesAccess==NULL) {
	echo "Session expired";
}
else if ($privilegesAccess == '3') {
	include("../php/controladores.php");
}
else{
	echo "No tiene los privilegios establecidos, Redireccionando ...";
	header("refresh:2; url=../index.html");
}




?>