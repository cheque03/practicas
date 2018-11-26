<!--Elaborar un algoritmo que solicite el numero de respuestas correctas, incorrectas y en blanco, correspondientes a postulantes, y muestre su puntaje final considerando,
que por cada respuesta correcta tendra 4 puntos, respuestas incorrectas tendra -1 y respuestas en blanco tendra 0. -->

<h3>Calificacones</h3>

<script type="text/javascript">
	var npreguntas = parseInt(prompt("Numero de preguntas: "));
	var rbien = parseInt(prompt("Numero de respuesta correctas: " + npreguntas + " de " + npreguntas));
	var rmal = parseInt(prompt("Numero de respuesta incorrectas: " + " tienes " + (npreguntas- rbien) + " de " + npreguntas ));
	var rvacias = parseInt(prompt("Numero de respuesta incorrectas: " + " tienes " + ((npreguntas- rbien)- rmal) + " de " + npreguntas));
	document.write("Son " + npreguntas + " las preguntas del examen <br><br>")
	total_preguntas = rbien+rmal+rvacias
		
	if (npreguntas <= total_preguntas) {
		total = ((rbien * 4 ) + (rmal * -1)) + (rvacias - rvacias);
		document.write("Respuestas correctas: " + rbien + "<br>");	
		document.write("Respuestas Incorrectas: " + rmal+ "<br>");	
		document.write("Respuestas en blanco: " + rvacias+ "<br><br>");	
	}
	else {
		document.write("las preguntas ingresadas son mas que las del examen")
	}	
	

	document.write("Tu calificacion es:" + total);	
	
</script>
