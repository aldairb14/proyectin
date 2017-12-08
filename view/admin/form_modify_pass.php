<?php

if($privilegesAccess != 1){
		header("location: ../index.php");
		exit();
	}
?>

<form action="../php/admin/modify_pass.php" method="POST">
	Usuario: <input type="text" name="user"><br>
	Nueva contraseña: <input type="password" name="password"><br>
	Repetir nueva contraseña: <input type="password" name="passwordr"><br>
	<input type="submit" name="modificarpass">
</form>