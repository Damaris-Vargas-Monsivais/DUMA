
function enviar_ajax(){	

	$.ajax({
	type: 'POST',
	url: 'proccess.php',
	data: $('#form1').serialize(),
	success: function(respuesta) {
		if(respuesta=='ok'){
		alert('enviado');
		}
		else {
		alert('error');
		}
	}
	});
}

