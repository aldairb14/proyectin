<?php

require("../php/access.php");
		
		if(isset($_GET["salir"])){
		session_destroy() ;
					header("location: ../index.php");
			}	

	if($privilegesAccess != 3){
		header("location: ../index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>ESCT16</title>
	
	<!--<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link href="../bootstrap/bootstrap-theme.css" rel="stylesheet"/>
	<!--<link href="../js/jquery.min" rel="stylesheet"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="../librerias/jquery-3.2.1.min.js"></script>

	 <link rel="stylesheet" type="text/css" href="../librerias/jquery.dataTables.min.css" />
    
    <script src="../librerias/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
       $(document).ready(function () {
            $('#datatable').dataTable();
        });

    </script>
	<script type="text/javascript" src="../librerias/popper.min.js"></script>
	<script type="text/javascript" src="../librerias/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../librerias/alertifyjs/alertify.js"></script>
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css" />
	<link rel="shortcut icon" href="../imagenes/logo.png">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../librerias/font-awesome/css/font-awesome.min.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
	<div class="navbar-header">
      <a class="navbar-brand" href="#">Sec. Tec. No. 16</a>
    </div>
  <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="docentes.php?optiond=add_calif">calficaciones</a></li>
       <li class="nav-item"><a class="nav-link" href="docentes.php?optiond=gen_list">Generar Lista</a></li>
  </ul>

    <form class="form-inline navbar-nav ml-auto">
     
       <p class="navbar-text" style="margin-right: 10px; "><?php echo "Usuario: ".$userAccess." id:".$id_userAccess; ?></p>
      <button type="submit" name="salir" class="btn btn-danger ">Salir</button>

    </form>
</nav>








</body>
<script type="text/javascript" src="docentes/funciones.js"></script>
<?php 
if ($privilegesAccess==NULL) {
	echo "Session expired";
}
else if ($privilegesAccess == '3') {
	echo '<div class="container" >';
	include("../php/controladores.php");
	echo "</div>";
}
else{
	echo "No tiene los privilegios establecidos, Redireccionando ...";
	header("refresh:2; url=../index.html");
}


 ?>