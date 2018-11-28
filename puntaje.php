
<!DOCTYPE html>
<html>
<head>
	<title>Puntuacion</title>
	<h2>Marcador final</h2>
  <!-- Elaborar un algoritmo que permita ingresar el numero de partidos ganados, perdidos y empatados, por algun equipo en el torneo apertura, se debe de mostrar su puntaje total,
teniendo en cuenta que por cada partido ganado obtendra 3 puntos, empatando 1 punto y perdido 0 puntos. -->
</head>
<body>

</body>
<script type="text/javascript">
	var partidos_ganados = parseInt(prompt("N de partidos ganados: "));
	var partidos_empatados = parseInt(prompt("N de partidos empatados: "));
	var partidos_perdidos = parseInt(prompt("N de partidos perdidos: "));

	var total = (partidos_ganados * 3) + (partidos_empatados * 1) +(partidos_perdidos * 0)
	document.write("partidos Ganados: " + partidos_ganados);
	document.write("<br>Partidos Empatados: " + partidos_empatados);
	document.write("<br>Partidos Perdidos: " + partidos_perdidos);
	document.write("<br>Tus puntos obtenidoss son: " + total);
</script>
</html>
