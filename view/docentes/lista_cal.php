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

 echo '<form id="form1" runat="server >
        <div class="container">
            <table class="table table-striped table-hover table-responsive" id="datatable" >
                <thead >
                    <tr class="table-primary">
                        <th>Nombre del Alumno</th>
                        <th >id alumno</th>
                        <th style="width: 40px;">id lista</th>
                        <th style="width: 40px;">me</th>
                        <th style="width: 40px;">td</th>
                        <th style="width: 40px;">hp</th>
                         <th style="width: 20px;">E1</th>
                        <th style="width: 20px;">E2</th>
                        <th style="width: 20px;">E3</th>
                        <th style="width: 20px;">E4</th>
                        <th style="width: 20px;">E5</th>
                        <th style="width: 20px;">E6</th>
                        <th style="width: 20px;">E7</th>
                        <th style="width: 20px;">E8</th>
                         <th style="width: 20px;">E9</th>
                        <th style="width: 20px;">E10</th>
                        <th style="width: 20px;">Eb</th>
                        <th style="width: 20px;">Ex</th>
                        <th style="width: 20px;">Ep</th>
                        <th style="width: 20px;">Val</th>
                        <th style="width: 20px;">cb</th>
                        <th style="width: 20px;">f</th>
                        
                         <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>';
                   
        require("conexion.php");

      //$consulta="select id_usuarios,usuario,nombres,apellidos,estado,privilegios from usuarios";
      $consulta="select alumnos.apellidoP, alumnos.apellidoM, alumnos.nombres_alumno, calificacionesp.id_lista, 
calificacionesp.me, calificacionesp.td, calificacionesp.hp from grupos_materias 
inner join calificacionesp on calificacionesp.id_lista=grupos_materias.id_lista 
inner join materias on grupos_materias.id_materia=materias.id_materia 
inner join alumnos on calificacionesp.id_alumno=alumnos.id_alumno where materias.id_profesor=$id_userAccess and grupos_materias.id_lista=$grup";
     
     $resultado=mysqli_query($conexion, $consulta);
      while ($ver=mysqli_fetch_row($resultado)) {
        # code...
      
            $datos= $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
        

        echo '<tr>
        <td>  '.$ver[0].' '.$ver[1].' '.$ver[2].'</td>
        <td>  '.$ver[1].' </td>
        <td> '.$ver[2].'</td>
        <td> <input type="text" value="'.$ver[3].'></td>
         <td> <input type="text" value="'.$ver[4].'" style="width: 40px;"></td>
        <td> <input type="text" value="'.$ver[5].'" style="width: 40px;"></td>
        <td> <input type="text" value="'.$ver[6].'" style="width: 25px;"></td>
       

        <td>';   ?>
         <a class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo  $datos ?>')">
  <i class="fa fa-pencil-square "></i> Editar</a>
        
        </td>
        <td>
         <a class="btn btn-danger" onclick="preguntarsino('<?php echo $ver[0] ?> ')">
  <i class="fa fa-trash-o"></i> Delete</a>
        </td>
        </tr> 
     
        <?php 
		
        }

	}	
         ?>
                </tbody>
            </table>
        </div>
    </form>
