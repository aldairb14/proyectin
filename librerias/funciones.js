
function agregardatos(nombres, apellidos,usuario,password,estado, privilegios){

	cadena="nombres="+ nombres +
			"&apellidos="+ apellidos + 
			"&usuario=" + usuario +
			"&pass=" +password+
			"&estado=" +pestado+
			"&privilegios"+privilegios;

	$.ajax({
		type:"POST",
		url:"./view/admin/agregardatos.php",
		data:cadena,
		success:function(r){
			alertify.error(" ---"+cadena );
			if (r==1) {
				alertify.success("Agregado con exito");
			}else{
				alertify.error("fallor el servidor");
			}
		}
	});


}