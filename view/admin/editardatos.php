<?php 

require("../conexion.php");
//$conexion =conexion();
	$id = $_POST['id'];
	$n = $_POST['nombres'];
	$a = $_POST['apellidos'];
	$u = $_POST['usuario'];
	$p = $_POST['pass'];
	$p1 = $_POST['pass1'];
	$e = $_POST['estado'];
	$pr = $_POST['privilegios'];
	
	if ($p!="") {
		if ($p==$p1) {
	
			$sql="update usuarios SET usuario='$u', password=MD5('$p'), nombres='$n', apellidos='$a', estado='$e', privilegios=$pr where id_usuarios=$id";
				if($resultv=mysqli_query($conexion,$sql)){
					
				}
	}else{
	
		}
	}else{

		$sql="update usuarios SET usuario='$u', nombres='$n', apellidos='$a', estado='$e', privilegios=$pr where id_usuarios=$id";
				if($resultv=mysqli_query($conexion,$sql)){
				
				}

	}
	

 ?>