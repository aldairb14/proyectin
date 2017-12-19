<?php


	if($privilegesAccess != 3){
		header("location: ../index.php");
		exit();
	}
?>


<form id="f_sel_mat" method="post">
						<div class="d-inline">
								<h4 >Seleccionar materia</h4>
					Grupo:
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
						
						<script type="text/javascript">
							grupo=$('#select_mat').val();
						</script>
								</div>
								<div class="d-inline"> 
<button type="button" class="btn btn-primary" id="btn_gen_list" ">
    Generar lista
  </button>
								</div>
									</form>


<script type="text/javascript"> 
	$(document).ready(function(){
		$('#btn_gen_list').click(function(){

		
			grupo=$('#select_mat').val();
			
				preguntarlista(grupo);
		});
		

	});

</script>


	