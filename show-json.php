<?php 

	if (isset($_GET["dato1"]) && isset($_GET["dato2"]) ) {
		
		$datos = array(); //creamos un array

		$dato1 = $_GET['dato1'];
		$dato2 = $_GET['dato2'];

		$datos[] = array('dato1' => $dato1, 'dato2' => $dato2);

		
		//creamos el json
		$json_string = json_encode($datos);
		echo $json_string;
		$file = 'datos.json';
		file_put_contents($file, $json_string);
		
	}
	else {
		echo "<span style='color: red;'> Por favor, ingrese algun dato. </span>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Formulario para generar y mostrar Json</title>
	<link rel="stylesheet" type="text/css" href="cssestilo.css">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
</head>
<body>

<form action="<?php $_PHP_SELF ?>" metod="post">
	ingrese un dato #1: <input type="text" name="dato1"/>
	<br>
	ingrese un dato #2: <input type="text" name="dato2"/>
	<br>
	<input type="submit">
</form>

<table class="grilla" id="tablajson">
	<thead>
		<th>Dato1</th>
		<th>Dato2</th>
	</thead>
	<tbody></tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		var url = "datos.json";

		$("#tablajson tbody").html("");
		$.getJSON(url, function(datos){
			$.each(datos, function(i,dato){
				
				var newRow = 
				"<tr>"
				+"<td>"+dato.dato1+"</td>"
				+"<td>"+dato.dato2+"</td>"
				+"</tr>";
				$(newRow).appendTo("#tablajson tbody");
			});
		});
	});
</script>

</body>
</html>
