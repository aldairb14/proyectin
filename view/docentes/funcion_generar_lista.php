<?php 

require("../conexion.php");
//$conexion =conexion();
	$g = $_POST['grupoid'];

	$sql="DELETE FROM calificacionesp where id_lista=$g";


	$resultv=mysqli_query($conexion,$sql);
	
	$sql1="SELECT id_alumno from alumnos inner join grupos_materias on alumnos.id_grupo=grupos_materias.id_grupo where grupos_materias.id_lista=$g";

	$results=mysqli_query($conexion,$sql1);

	while($ar=mysqli_fetch_array($results)){
			
			$sql2="INSERT INTO calificacionesp (id_alumno, id_lista) values($ar[0],$g)";
				
				$resulti=mysqli_query($conexion,$sql2);
				echo "<td>  $resulti</td>";
			
			
		}
 ?>