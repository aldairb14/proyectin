<?php 

	require("../php/access.php");
		
		if(isset($_GET["salir"])){
		session_destroy() ;
					header("location: ../index.php");
			}	

	if($privilegesAccess != 1){
		header("location: ../index.php");
		exit();
	}



 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>ESCT16</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
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


	<style type="text/css">
		  .contenedor{

            background-color: #fafafa;
            width: 30%;
            transition:2s;
            margin-top: 60px;
            box-shadow: 0px 0px 40px white, 0px 0px 80px white;
            padding-bottom: 50px;


        }

	</style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
	<div class="navbar-header">
      <a class="navbar-brand" href="#">Sec. Tec. No. 16</a>
    </div>
  <ul class="navbar-nav">


    
      <li class="nav-item"><a class="nav-link" href="admin.php?optiona=view">ver usuarios</a></li>
  </ul>

    <form class="form-inline navbar-nav ml-auto"">
     
       <p class="navbar-text" style="margin-right: 10px; "><?php echo "Usuario: ".$userAccess." "; ?></p>
      <button type="submit" name="salir" class="btn btn-danger ">Salir</button>

    </form>
</nav>


  

  <div class="modal fade" id="modalNuevo">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Agregar Nuevo Usuario</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form>
        	<div class="form-group">
      	<label>Nombres: </label>
      	<input class="form-control input-sm" type="text" placeholder="Ingresar Nombres" id="name" name="name" required>
      </div>
      	<div class="form-group">
      	<label>Apellidos: </label>
      	<input class="form-control input-sm" type="text" placeholder="Ingresar Apellidos" id="lastname" name="lastname" required>
      </div>
      	<div class="form-group">
      	<label>Usuario: </label>
      	<input class="form-control input-sm" type="text" placeholder="Ingresar Usuario" id="user" name="user">
      </div>
      	<div class="form-group">
      	<label>Contraseña: </label>
      	<input class="form-control input-sm" type="password" placeholder="Ingresar Contraseña" id="pass" name="pass">
      </div>
      	<div class="form-group">
      	<label>Repetir Contraseña: </label>
      	<input class="form-control input-sm" type="password" placeholder="Repetir Contraseña" id="passr" name="passr">
      </div>
      	<div class="form-group">
		      <label >Estado</label>
		      
			      <select class="form-control input-sm" class="form-control" id="estado" name="estado">
			        <option value="1" selected>Activo</option>
					<option value="0">Inactivo</option>
					
			      </select>
		 </div>
		<div class="form-group">
		      <label >Tipo de Usuario</label>
		      
			      <select class="form-control input-sm" class="form-control" id="privileges" name="privileges">
			        <option value="3" selected>Docente</option>
					<option value="2">Control Escolar</option>
					<option value="1">Administrador</option> 
			      </select>
		 </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <!--<button type="submit" class="btn btn-primary" id="agregarUser" name="agregarUser" data-dismiss="modal">Agregar</button>-->
          <input type="submit" class="btn btn-primary" id="agregarUser" name="agregarUser" >
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    </form>
  </div>
  

  <!-- The Modal modificar usuario -->
  <div class="modal fade" id="modalEdicion">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Editar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<input type="text" hidden="" id="idpersona" name="">
        	<div class="form-group">
      	<label>Nombres: </label>
      	<input class="form-control input-sm" type="text" placeholder="Ingresar Nombres" name="nameu">
      </div>
      	<div class="form-group">
      	<label>Apellidos: </label>
      	<input class="form-control input-sm" type="text" placeholder="Ingresar Apellidos" name="lastnameu">
      </div>
      	<div class="form-group">
      	<label>Usuario: </label>
      	<input class="form-control input-sm" type="text" placeholder="Ingresar Usuario" name="useru">
      </div>
      	<div class="form-group">
      	<label>Contraseña: </label>
      	<input class="form-control input-sm" type="password" placeholder="Ingresar Contraseña" name="passu">
      </div>
      	<div class="form-group">
      	<label>Repetir Contraseña: </label>
      	<input class="form-control input-sm" type="password" placeholder="Repetir Contraseña" name="passru">
      </div>
		<div class="form-group">
		      <label >Tipo de Usuario</label>
		      
			      <select class="form-control input-sm" class="form-control"  name="privilegesu">
			        <option value="3" selected>Docente</option>
					<option value="2">Control Escolar</option>
					<option value="1">Administrador</option> 
			      </select>

		     </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary"  name="editarUser" data-dismiss="modal">Editar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



<!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  



<script type="text/javascript"> 
	$(document).ready(function(){
		$('#agregarUser').click(function(){
			nombres=$('#name').val();
			apellidos=$('#lastname').val();
			usuario=$('#user').val();
			password=$('#pass').val();
			estado=$('#estado').val();
			privileges=$('#privileges').val();
				agregardatos(nombres,apellidos,usuario,password,estado,privileges);
		});
	});
</script>



<?php



if ($privilegesAccess==NULL) {
	echo "Session expired";
}
else if ($privilegesAccess == '1') {
//	echo '<div class="container contenedor">';
	include("../php/controladores.php");
//	echo "</div>";
	
}
else{
	header("location: ../index.php");
}
?>
<script type="text/javascript" src="admin/funciones.js"></script>

</body>