<?php

if($privilegesAccess != 1){
		header("location: ../index.php");
		exit();
	}
?>
<!-- The Modal Nuevo usuario -->
  <div class="container">
    <br>
    <div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
    Nuevo Usuario
  </button>
</div>
<br>
</div>

 <form id="form1" runat="server">
        <div class="container">
            <table class="table table-striped table-hover" id="datatable">
                <thead >
                    <tr class="table-primary">
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>estado</th>
                        <th>privilegios</th>
                         <th>Editar</th>
                        <th>Elimiar</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
        require("conexion.php");

      $consulta="select id_usuarios,usuario,nombres,apellidos,estado,privilegios from usuarios";
     // $consulta="select * from alumnos";
     
     $resultado=mysqli_query($conexion, $consulta);
      while ($ver=mysqli_fetch_row($resultado)) {
        # code...
      $count = count($ver);
 $datos="";
  echo " <tr>";

for ($i=0; $i < $count; $i++) { 
  $datos= $datos.$ver[$i]."||";
  echo " <td>$ver[$i] </td>";
}
   
           // $datos= $ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5];
         ?>

       
        
        <td>
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

         ?>
                </tbody>
            </table>
        </div>
    </form>



  </div>
</div>
</div>
