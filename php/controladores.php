

<?php

if (isset($_GET['optiona'])) {
		switch ($_GET['optiona']) {
		case 'add':
			include("../view/admin/form_add_user.php");
			break;

		case 'delete':
			include("../view/admin/form_delete_user.php");	
			//echo "Eliminar";
			break;

		case 'modify':
			include("../view/admin/form_modify_pass.php");
			break;
		case 'view':
			include("../view/admin/form_view_user.php");
			break;
		}
	}
	

else if (isset($_GET['optionc'])) {
		switch ($_GET['optionc']) {
		case 'add_student':
			include("../view/control_school/form_add_student.php");
			break;
		case 'modify_student':
			include("../view/control_school/form_modify_student.php");
			break;

		case 'delete_student':
			include("../view/control_school/form_delete_student.php");
			break;

		case 'listas':
			echo "listas";
			break;

		case 'asig_subject':
			echo "asignar materias";
			break;

		case 'asig_group':
			echo "asignar grupos";
			break;

		case 'add_group':
			include("../view/control_school/form_add_group.html");
			break;

		case 'add_subject':
			include("../view/control_school/form_add_subject.php");
			break;

		case 'add_teacher':
			include("../view/control_school/form_add_teacher.html");
			break;

		case 'modify_teacher':
			echo "Modificar profesor";
			break;
		}
	}

else if (isset($_GET['optiond'])) {
		switch ($_GET['optiond']) {
		case 'add_calif':
			echo "Agregar calificaciones";
			break;

		case 'modify_calif':
			echo "modificar calificaciones";
			break;

		case 'generate_reports':
			echo "generar reportes";
			break;
		}
	}

else{
		echo '<center><img src="../imagenes/logo.png"><center>';
	}


?>