


$(document).ready(function(){

	$("#btnLogin").click(function(){

		var us = $("#usuario").val();
		var pass = $("#pass").val();

		$.ajax({
			url:'../servidor/servicios.php',
			type: 'POST',
			data:{
				opcion:'login',
				usuario: us,
				password: pass
			},
			dataType: 'html',
			success: function(data, textSttatus, jaXHR){

				if(data == "ok"){
					window.location.href= "#inicio";

				}else{

					alert(data);
				}
			}


		});

	});



});


$(document).ready(function(){

	$("#programar").click(function(){

		alert("ha sido programada la cita");

		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
		var cedula = $("#cedula").val();
		var telefono = $("#telefono").val();
		var especialidad = $("#especialidad").val();
		var fecha_cita = $("#fecha").val();
		var hora_cita = $("#cita").val();


		$.ajax({
			url:'../servidor/servicios.php',
			type: 'POST',
			data:{
				opcion:'registro',
				nom: nombre,
				ape: apellido,
				ced: cedula,
				tel: telefono,
				esp: especialidad,
				fec: fecha_cita,
				hor: hora_cita,
			},
			dataType: 'html',
			success: function(data, textSttatus, jaXHR){

				if(data == "ok"){
					alert("oka");
					window.location.href= "#registro";
				

				}else{

						alert("noooo");					
				}
			}


		});

	});



});