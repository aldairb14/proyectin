
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

function agregaform(datos){
	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nameu').val(d[1]);
	$('#lastnameu').val(d[2]);
	$('#useru').val(d[3]);
	$('#privilegesu').val(d[4]);
	
	
	
	//passu
	//passru
	
//https://www.youtube.com/watch?v=52niJ-2TrQ0
}