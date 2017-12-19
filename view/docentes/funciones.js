function preguntarlista(id){

alertify.confirm('Crear Lista', 'Esta acción eliminara la lista y la volvera a crear ¿Esta seguro? ', 
				function(){ generarlista(id) }
                , function(){ alertify.error('Cancelado')});
}

function generarlista(grupo){

	var cadena="grupoid="+ grupo;

	$.ajax({
		type:"POST",
		url:"docentes/funcion_generar_lista.php",
		data:cadena


	})
	.done(function(data){
		alertify.success("Lista creada con exito");	
		console.log(data);
		//setTimeout('document.location.reload()', 4000);
	})
	.fail(function(){
		alertify.error("fallo en el servidor");
	});
}

function fnt_update(datos){
	var cadena=datos;
	//console.log(cadena);
	$.ajax({
		type:"POST",
		url:"docentes/updatedatos.php",
		data:cadena


	})
	.done(function(data){
		alertify.success("Registro actualizado con exito");	
		console.log(data);
		//setTimeout('document.location.reload()', 4000);
	})
	.fail(function(data){
		console.log(data);
		alertify.error("fallo en el servidor");
	});



}