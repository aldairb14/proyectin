
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
		alertify.error("fallo en el servidor");
	});
}

function agregaform(datos){
	d=datos.split('||');

	$('#idpersona').val(d[0]);
	$('#nameu').val(d[2]);
	$('#lastnameu').val(d[3]);
	$('#useru').val(d[1]);
	$('#passu').val("");
	$('#passru').val("");
	$('#estadou').val(d[4]);
	$('#privilegesu').val(d[5]);

}

function editardatos(id,nombres, apellidos,usuario,password,password1,estado, privilegios){
//id,nombres, apellidos,usuario,password,password1,estado, privilegios

var cadena="id="+idpersona+
			"&nombres="+ nombres +
			"&apellidos="+ apellidos + 
			"&usuario=" + usuario +
			"&pass=" +password+
			"&pass1=" +password1+
			"&estado=" +estado+
			"&privilegios="+privileges;


if (password!="" || password1!=""){
	if (password===password1) {
			$.ajax({
		type:"POST",
		url:"admin/editardatos.php",
		data:cadena
		
	}).done(function(data){
		alertify.success("Editado con exito");	

		setTimeout('document.location.reload()', 2000);
	})
	.fail(function(){
		alertify.error("fallo en el servidor");
	});
	}else{
		alertify.error("las contraseñas deben coincidir");
	}

}else{
	$.ajax({
		type:"POST",
		url:"admin/editardatos.php",
		data:cadena
		
	}).done(function(data){
		alertify.success("Editado con exito");	

		setTimeout('document.location.reload()', 2000);
	})
	.fail(function(){
		alertify.error("fallo en el servidor");
	});
}


}


function preguntarsino(id){

alertify.confirm('Eliminar Usuario', '¿Esta seguro de eliminar este registro?', 
				function(){ eliminardatos(id) }
                , function(){ alertify.error('Cancelado')});
}

function eliminardatos(id){
cadena="id="+id;

$.ajax({
		type:"POST",
		url:"admin/eliminardatos.php",
		data:cadena
}).done(function(data){
		alertify.success("Editado con exito");	

		setTimeout('document.location.reload()', 2000);
	})
	.fail(function(){
		alertify.error("fallo en el servidor");
	});

}