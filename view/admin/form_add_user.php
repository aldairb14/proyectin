<?php

if($privilegesAccess != 1){
		header("location: ../index.php");
		exit();
	}
?>
<div class="container">
<form class="form-horizontal" action="../php/admin/add_user.php" method="POST">
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="text">Nombres:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  placeholder="Ingresar Nombres" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Apellidos:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  placeholder="Ingresar Apellidos" name="lastname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Usuario:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  placeholder="Ingresar Usuario" name="user">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
      <div class="col-sm-8">
        <input type="password" class="form-control"  placeholder="Ingresar Contraseña" name="pass">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Repetir Contraseña:</label>
      <div class="col-sm-8">
        <input type="password" class="form-control"  placeholder="Repetir Contraseña" name="passr">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="sel1">Tipo de Usuario</label>
      <div class="col-sm-8">  
	      <select class="form-control" id="sel1" name="privileges">
	        <option value="3" selected>Docente</option>
			<option value="2">Control Escolar</option>
			<option value="1">Administrador</option> 
	      </select>
       </div>
     </div>
         <button type="submit" class="btn btn-success center-block" name="agregarUser">Agregar</button>	
</form>
</div