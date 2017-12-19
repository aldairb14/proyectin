<?php


	if($privilegesAccess != 3){
		header("location: ../index.php");
		exit();
	}


?>


<form id="f_sel_mat" method="post">
						<div class="inline elem4 centrar">
								<h4 >Seleccionar materia</h4>
								grupos:
								<select  form="f_sel_mat" id="select_mat" name="select_mat" ">
							<?php
//SELECT * FROM `grupos_materias` INNER JOIN grupos ON grupos_materias.id_grupo=grupos.id_grupo INNER JOIN materias ON grupos_materias.id_materia=materias.id_materia
							require('conexion.php');
							mysqli_set_charset($conexion,"UTF8");
								$consulta4="SELECT grupos_materias.id_lista,grupos.grado, grupos.grupo, materias.nombre_materia FROM `grupos_materias` INNER JOIN grupos ON grupos_materias.id_grupo=grupos.id_grupo INNER JOIN materias ON grupos_materias.id_materia=materias.id_materia where materias.id_profesor=$id_userAccess";
								$re4=mysqli_query($conexion,$consulta4);
									while($ar=mysqli_fetch_array($re4)){
												echo "<option value='$ar[0]'> $ar[1] - $ar[2] - $ar[3]</option> ";
									 }
							?>

   						</select>
						
						<button type="submit" name="mostrar" class="btn btn-info">Mostrar</button>
								</div>
</form>


<?php 

if(isset($_POST["mostrar"])){
	
	$grup = $_POST['select_mat'];

		$sql="SELECT grupos.grado, grupos.grupo, materias.nombre_materia FROM `grupos_materias` INNER JOIN grupos ON grupos_materias.id_grupo=grupos.id_grupo INNER JOIN materias ON grupos_materias.id_materia=materias.id_materia where grupos_materias.id_lista=$grup";
$res=mysqli_query($conexion,$sql);
$ar=mysqli_fetch_array($res);
	
echo "<br>";
echo "<h5>Lista Actual </h5>";
echo "<h6> Grado: <b>$ar[0] </b>Grupo :<b> $ar[1] </b>Materia :<b> $ar[2]</b></h6>";
echo "<br>";
?>


<table table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" WIDTH="1100">
	<thead >
		<th WIDTH="17%" > </th>
		<th WIDTH="12%" class="text-center">valores</th>
		<th WIDTH="40%" class="text-center">evaluacion productos</th>
		<th WIDTH="4%"></th>
		<th WIDTH="18%" class="text-center">promedios</th>
		<th WIDTH="9%"></th>
	</thead>
	
</table>

<table table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" WIDTH="1100" id="datatables">
		<thead>
		<th WIDTH="17%">Nombre del Alumno </th>
		<th WIDTH="4%">ME</th>
		<th WIDTH="4%">TD</th>
		<th WIDTH="4%">HP</th>
		<th WIDTH="4%">1</th>
		<th WIDTH="4%">2</th>
		<th WIDTH="4%">3</th>
		<th WIDTH="4%">4</th>
		<th WIDTH="4%">5</th>
		<th WIDTH="4%">6</th>
		<th WIDTH="4%">7</th>
		<th WIDTH="4%">8</th>
		<th WIDTH="4%">9</th>
		<th WIDTH="4%">10</th>
		<th WIDTH="4%">EB</th>
		<th WIDTH="3.5%">EX</th>
		<th WIDTH="3.5%">EP</th>
		<th WIDTH="3.5%">VAL</th>
		<th WIDTH="3.5%">CB</th>
		<th WIDTH="4%">F</th>
		<th WIDTH="9%"></th>
	</thead>
	<tbody>

		<?php 
		 $consulta="select alumnos.apellidoP, alumnos.apellidoM, alumnos.nombres_alumno,
calificacionesp.me, calificacionesp.td, calificacionesp.hp, calificacionesp.e1, calificacionesp.e2,
calificacionesp.e3,calificacionesp.e4,calificacionesp.e5,calificacionesp.e6, calificacionesp.e7,calificacionesp.e8,
calificacionesp.e9,calificacionesp.e10, calificacionesp.eb, calificacionesp.ex,calificacionesp.ep,calificacionesp.val,calificacionesp.cb,calificacionesp.f, calificacionesp.id_cal
 from grupos_materias 
inner join calificacionesp on calificacionesp.id_lista=grupos_materias.id_lista 
inner join materias on grupos_materias.id_materia=materias.id_materia 
inner join alumnos on calificacionesp.id_alumno=alumnos.id_alumno where materias.id_profesor=$id_userAccess and grupos_materias.id_lista=$grup";

$resultado=mysqli_query($conexion, $consulta);
      while ($ver=mysqli_fetch_row($resultado)) {

      	  echo '<tr>
        <td>  '.$ver[0].' '.$ver[1].' '.$ver[2].'</td>';
    
       echo '<td> <input type="number" min="0" max="0.5" step="0.1" value="'.$ver[3].'" style="width: 100%;" class="val"></td>';
       echo '<td> <input type="number" min="0" max="0.5" step="0.1" value="'.$ver[4].'" style="width: 100%;" class="val"></td>';
       echo '<td> <input type="number" min="0" max="0.5" step="0.1" value="'.$ver[5].'" style="width: 100%;" class="val"></td>';
       echo '<td> <input type="number" min="0" max="10"  value="'.$ver[6].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[7].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[8].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[9].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[10].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[11].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[12].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[13].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[14].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="number" min="0" max="10"  value="'.$ver[15].'" style="width: 100%;" class="ep"></td>';
        echo '<td> <input type="text" value="'.$ver[16].'" style="width: 100%;" class="eb"></td>';
        echo '<td> <input type="text" value="'.$ver[17].'" style="width: 100%;" readonly disabled class="eb ex prom"></td>';
        echo '<td> <input type="text" value="'.$ver[18].'" style="width: 100%;" readonly disabled class="ep prom"></td>';
        echo '<td> <input type="text" value="'.$ver[19].'" style="width: 100%;" readonly disabled class="val prom"></td>';
        echo '<td> <input type="text" value="'.$ver[20].'" style="width: 100%;" readonly disabled class="cb prom"></td>';
        echo '<td> <input type="number" value="'.$ver[21].'" style="width: 100%;"></td>';
        echo '<td> <input type="button" value="Actualizar "class="btn btn-success" style="width: 100%;" ></td>';
        echo '<td hidden> <input type="text" value="'.$ver[22].'" style="width: 100%; hidden"></td>';
        echo "</tr>";
      }

		 ?>


	</tbody>

</table>
       <?php 
        }		
         ?>

        </div>
    </form>
    <script type="text/javascript">
    	
    	seleccionupdate=$("tr>td>input[type='button']");

		seleccionupdate.click(function(){
        //var r =$(this).closest("tr");
         //console.log(r);
          var r =$(this).closest("tr").find('input');
          

          var cadena="me="+ $(r[0]).val()+
					  "&td="+ $(r[1]) .val()+
					   "&hp="+ $(r[2]) .val()+
					   "&e1="+ $(r[3]) .val()+
					   "&e2="+ $(r[4]) .val()+
					   "&e3="+ $(r[5]) .val()+
					   "&e4="+ $(r[6]) .val()+
					   "&e5="+ $(r[7]) .val()+
					   "&e6="+ $(r[8]) .val()+
					   "&e7="+ $(r[9]) .val()+
					   "&e8="+ $(r[10]) .val()+
					   "&e9="+ $(r[11]) .val()+
					   "&e10="+ $(r[12]) .val()+
					   "&eb="+ $(r[13]) .val()+
					   "&ex="+ $(r[14]) .val()+
					   "&ep="+ $(r[15]) .val()+
					   "&val="+ $(r[16]) .val()+
					   "&cb="+ $(r[17]) .val()+
					   "&f="+ $(r[18]) .val()+
					   "&id="+ $(r[20]) .val() ;
          //console.log(cadena);
           fnt_update(cadena);
    });

//funcion para actualizar en vivo los valores
seleccionval=$("tr>td>input.val");
seleccionval.change(function(){
	var r =$(this).closest("tr").find('input.val');
	var val1 = parseFloat($(r[0]) .val());
	var val2 = parseFloat($(r[1]) .val());
	var val3 = parseFloat($(r[2]) .val());
	var sumval= val1+val2+val3;
	$(r[3]).val(sumval);

	var pro =$(this).closest("tr").find('input.prom');
	var pro1 = parseFloat($(pro[0]).val());
	var pro2 = parseFloat($(pro[1]).val());
	var pro3 = parseFloat($(pro[2]).val());
	var sumprom= (pro1+pro2+pro3).toFixed(1);
	$(pro[3]).val(sumprom);

});

//funcion para actualizar en vivo la calificacion de examen
seleccioneb=$("tr>td>input.eb");
seleccioneb.change(function(){
	var re =$(this).closest("tr").find('input.eb');
	var val1 = parseFloat($(re[0]) .val());
	
	var sumeb= (val1*0.4).toFixed(1);
	$(re[1]).val(sumeb);

	var pro =$(this).closest("tr").find('input.prom');
	var pro1 = parseFloat($(pro[0]).val());
	var pro2 = parseFloat($(pro[1]).val());
	var pro3 = parseFloat($(pro[2]).val());
	var sumprom= (pro1+pro2+pro3).toFixed(1);
	$(pro[3]).val(sumprom);
	//console.log(pro);
});

//funcion para actualizar en vivo los promedios
seleccionep=$("tr>td>input.ep");
seleccionep.change(function(){
	var prod  =$(this).closest("tr").find('input.ep');
//console.log(prod);
var tem=0, cont=0,  sumapro;

	for ( var i=0 ; i < prod.length-1; i++) {

		var ac = $(prod[i]).val();

		if(ac==""){

		}else{
		 tem = tem+parseFloat(ac);
		 cont=cont+1;
		}		
	}
	
	if (Number.isNaN(tem / cont)) {
		//console.log("s")
		sumapro=0;
		$(prod[10]).val(sumapro);
	}else{

		sumapro= ((tem/cont)*0.45).toFixed(1);
		$(prod[10]).val(sumapro);

	}

	var pro =$(this).closest("tr").find('input.prom');
	var pro1 = parseFloat($(pro[0]).val());
	var pro2 = parseFloat($(pro[1]).val());
	var pro3 = parseFloat($(pro[2]).val());
	var sumprom= (pro1+pro2+pro3).toFixed(1);
	$(pro[3]).val(sumprom);

});



    </script>
