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

$sql="UPDATE calificacionesp SET me=$me, td=$td, hp=$hp,";

if ($e1!="") {
	 $sql=$sql."e1=$e1,";
}else{
	$sql=$sql."e1=NULL,";
}
if ($e2!="") {
	 $sql=$sql."e2=$e2,";
}else{
	$sql=$sql."e2=NULL,";
}
if ($e3!="") {
	 $sql=$sql."e3=$e3,";
}else{
	$sql=$sql."e3=NULL,";
}
if ($e4!="") {
	 $sql=$sql."e4=$e4,";
}else{
	$sql=$sql."e4=NULL,";
}
if ($e5!="") {
	 $sql=$sql."e5=$e5,";
}else{
	$sql=$sql."e5=NULL,";
}
if ($e6!="") {
	 $sql=$sql."e6=$e6,";
}else{
	$sql=$sql."e6=NULL,";
}
if ($e7!="") {
	 $sql=$sql."e7=$e7,";
}else{
	$sql=$sql."e7=NULL,";
}
if ($e8!="") {
	 $sql=$sql."e8=$e8,";
}else{
	$sql=$sql."e8=NULL,";
}
if ($e9!="") {
	 $sql=$sql."e9=$e9,";
}else{
	$sql=$sql."e9=NULL,";
}
if ($e10!="") {
	 $sql=$sql."e10=$e10,";
}else{
	$sql=$sql."e10=NULL,";
}

$sql=$sql." eb=$eb, ex=$ex, ep=$ep, val=$val, cb=$cb, f=$f WHERE id_cal=$id";

//$sql="UPDATE calificacionesp SET me=$me, td=$td, hp=$hp, e1=$e1, e2=$e2, e3=$e3, e4=$e4, e5=$e5, e6=$e6, e7=$e7, e8=$e8, e9=$e9, e10=$e10, eb=$eb, ex=$ex, ep=$ep, val=$val, cb=$cb, f=$f WHERE id_cal=$id";
$result=mysqli_query($conexion,$sql);
//echo "$id $me $e4";
 ?>