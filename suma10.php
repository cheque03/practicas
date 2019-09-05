<!DOCTYPE html>
<html>
<head>
	<title>Suma de 10 numeros</title>
</head>
<body>
<script>
	
	var contador = 1;
	var total=0;
	while (contador <=10) {
		var numero = parseInt(prompt("ingresa el " + contador));
		total = total + numero;
		console.log(total);
		contador = contador +1;
	}
	document.write(total);

</script>

</body>
</html>
