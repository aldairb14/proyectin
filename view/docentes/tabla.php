<?php 
require('../conexion.php');
 ?>

<!--<table table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" WIDTH="1100">
	<thead >
		<th WIDTH="25%"> </th>
		<th WIDTH="12%">valores</th>
		<th WIDTH="30%">evaluacion productos</th>
		<th WIDTH="4%"></th>
		<th WIDTH="20%">promedios</th>
		<th WIDTH="9%"></th>
	</thead>

		<thead>
		<th WIDTH="25%">Nombre del Alumno </th>
		<th WIDTH="4%">ME</th>
		<th WIDTH="4%">TD</th>
		<th WIDTH="4%">HP</th>
		<th WIDTH="3%">1</th>
		<th WIDTH="3%">2</th>
		<th WIDTH="3%">3</th>
		<th WIDTH="3%">4</th>
		<th WIDTH="3%">5</th>
		<th WIDTH="3%">6</th>
		<th WIDTH="3%">7</th>
		<th WIDTH="3%">8</th>
		<th WIDTH="3%">9</th>
		<th WIDTH="3%">10</th>
		<th WIDTH="4%">EB</th>
		<th WIDTH="4%">EX</th>
		<th WIDTH="4%">EP</th>
		<th WIDTH="4%">VAL</th>
		<th WIDTH="4%">CB</th>
		<th WIDTH="4%">F</th>
		<th WIDTH="9%"></th>
	</thead>
	
</table>-->

<table table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" WIDTH="1100">
	<tr>
		<td WIDTH="25%"></td>
		<td  WIDTH="12%">valores</td>
		<td  WIDTH="30%">Evaluacion Productos</td>
		<td></td>
	</tr>
	
	
		<td WIDTH="25%">Nombre del Alumno </td>
		<td WIDTH="4%">ME</td>
		<td WIDTH="4%">TD</td>
		<th WIDTH="4%">HP</td>
		<th WIDTH="3%">1</th>
		<th WIDTH="3%">2</th>
		<th WIDTH="3%">3</th>
		<th WIDTH="3%">4</th>
		<th WIDTH="3%">5</th>
		<th WIDTH="3%">6</th>
		<th WIDTH="3%">7</th>
		<th WIDTH="3%">8</th>
		<th WIDTH="3%">9</th>
		<th WIDTH="3%">10</th>
		<th WIDTH="4%">EB</th>
		<th WIDTH="4%">EX</th>
		<th WIDTH="4%">EP</th>
		<th WIDTH="4%">VAL</th>
		<th WIDTH="4%">CB</th>
		<th WIDTH="4%">F</th>
		<th WIDTH="9%"></th>

	<tbody>

		<?php 
		 $consulta="select alumnos.apellidoP, alumnos.apellidoM, alumnos.nombres_alumno,
calificacionesp.me, calificacionesp.td, calificacionesp.hp, calificacionesp.e1, calificacionesp.e2,
calificacionesp.e3,calificacionesp.e4,calificacionesp.e5,calificacionesp.e6, calificacionesp.e7,calificacionesp.e8,
calificacionesp.e9,calificacionesp.e10, calificacionesp.eb, calificacionesp.ex,calificacionesp.ep,calificacionesp.val,calificacionesp.cb,calificacionesp.f
 from grupos_materias 
inner join calificacionesp on calificacionesp.id_lista=grupos_materias.id_lista 
inner join materias on grupos_materias.id_materia=materias.id_materia 
inner join alumnos on calificacionesp.id_alumno=alumnos.id_alumno where materias.id_profesor=2 and grupos_materias.id_lista=6";

$resultado=mysqli_query($conexion, $consulta);
      while ($ver=mysqli_fetch_row($resultado)) {

      	  echo '<tr>
        <td>  '.$ver[0].' '.$ver[1].' '.$ver[2].'</td>';
    
        echo '<td> <input type="text" value="'.$ver[3].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[4].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[5].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[6].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[7].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[8].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[9].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[10].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[11].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[12].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[13].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[14].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[15].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[16].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[17].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[18].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[19].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[20].'" style="width: 100%;"></td>';
        echo '<td> <input type="text" value="'.$ver[21].'" style="width: 100%;"></td>';
        echo '<td> <input type="button" value="Actualizar" style="width: 100%;"></td>';
        echo "</tr>";
      }

		 ?>

	

	</tbody>

</table>
<table table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" WIDTH="1100">
	<tr>
		<td width="25%"> asdadadads</td>
		<td width="12%"> adsa</td>
		<td width="30%">asdas </td>
		<td width="4%">asdasd </td>
		<td width="20%">adsasd</td>
		<td width="9%">asda </td>
		
	</tr>
	<tr>
		<td width="25%"> asdasd</td>
		<td width="4%">sdfsdf </td>
		<td width="10%"> fsdfds</td>
		<td width="10%"> fsdfsd</td>
		<td width="30%">asda </td>
		<td width="4%"> asda</td>
		<td width="20%"> asda</td>
		<td width="9%"> asdasppp</td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td></td>
	</tr>
</table>