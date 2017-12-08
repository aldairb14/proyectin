<form name="form1" method="post" action="form_delete_student.php" id="cdr" >
  <h3>Buscar Cliente  </h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit" name="Submit" value="buscar" />
        </p>
</form>



<?php
  $busca="";
  $busca=$_POST['busca'];

	require("../php/conexion.php");
	$addConexion = new ConectarDB();
	$conexion = @$addConexion->conectar();



	if (!$conexion) {
		echo "No es posible eliminar alumno, contacta al administrador";
		//header("refresh: 3; url=../control_school.php");
	}
	else{

		//$query = mysqli_query($conexion, "select id_grupo, grado, grupo, turno, periodo from grupos order by periodo desc");

		if($busca!=""){
		$busqueda=mysqli_query($conexion, "SELECT * FROM alumnos WHERE nombres_alumno LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda


?>

<table width="1166" border="1" id="tab">
 <tr>
	 <td width="19">ID Alumno </td>

	 <td width="157">Nombres</td>
	 <td width="221">Apellido Paterno</td>
	 <td width="221">Apellido Materno</td>
	 <td width="107">ID Grupo</td>
 </tr>

 <?php

 while($f=mysql_fetch_array($busqueda)){
 echo '<tr>';
 echo '<td width="19">'.$f['id_alumno'].'</td>';

 echo '<td width="157">'.$f['nombres_alumno'].'</td>';
 echo '<td width="221">'.$f['apellidoP'].'</td>';
 echo '<td width="221">'.$f['apellidoM'].'</td>';
 echo '<td width="107">'.$f['id_grupo'].'</td>';
 echo  '<td>'.'<input type="button" onclick="Borra('.$f['id_cliente'].')" value="Borrar cliente">'.'</td>';
 echo '<td>'.'<a href="#">'.'Modificar'.'</a>'.'</td>';
 echo '</tr>';
 //onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
 //cambiar los nombres de los campos de busqueda
 }
  }
  }
 ?>
 </table>
