<?php 

require("../conexion.php");

$id=$_POST['id'];

$sql="delete from usuarios where id_usuarios=$id";
$result=mysqli_query($conexion,$sql);
 ?>