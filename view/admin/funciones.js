
function agregardatos(nombres, apellidos,usuario,password,estado, privilegios){

	var cadena="nombres="+ nombres +
			"&apellidos="+ apellidos + 
			"&usuario=" + usuario +
			"&pass=" +password+
			"&estado=" +estado+
			"&privilegios="+privilegios;

	$.ajax({
		type:"POST",
		url:"admin/agregardatos.php",
		data:cadena
	})
	.done(function(data){
		alertify.success("Agregado con exito");	

		setTimeout('document.location.reload()', 4000);
	})
	.fail(function(){
		alertify.error("wew"+	r);
	});


}