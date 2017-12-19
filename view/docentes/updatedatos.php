<?php 

require("../conexion.php");

$id=$_POST['id'];
$me=$_POST['me'];
$td=$_POST['td'];
$hp=$_POST['hp'];
$e1=$_POST['e1'];
$e2=$_POST['e2'];
$e3=$_POST['e3'];
$e4=$_POST['e4'];
$e5=$_POST['e5'];
$e6=$_POST['e6'];
$e7=$_POST['e7'];
$e8=$_POST['e8'];
$e9=$_POST['e9'];
$e10=$_POST['e10'];
$eb=$_POST['eb'];
$ex=$_POST['ex'];
$ep=$_POST['ep'];
$val=$_POST['val'];
$cb=$_POST['cb'];
$f=$_POST['f'];

$sql="UPDATE calificacionesp SET me=$me, td=$td, hp=$hp, e1=$e1, e2=$e2, e3=$e3, e4=$e4, e5=$e5, e6=$e6, e7=$e7,
e8=$e8, e9=$e9, e10=$e10, eb=$eb, ex=$ex, ep=$ep, val=$val, cb=$cb, f=$f
 WHERE id_cal=$id";
$result=mysqli_query($conexion,$sql);
//echo "$id $me $e4";
 ?>