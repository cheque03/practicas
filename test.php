<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
        .hidden{
            visibility: hidden;
        }
    </style>
<script>

$(document).ready(function(){
    $(".btn1").click(function(){
        $("p").hide();
    });
    $(".btn2").click(function(){
        $("p").show();
    });
});
</script>
</head>
<body>

<p>This is a paragraph.</p>

<button class="btn1">Hide</button>
<button class="btn2">Show</button>

<div class="formulario hidden ">
	<label>valor 1</label>
	<input type="text" name="">
	<label>valor 1</label>
	<input type="text" name="">
</div>

<select name="testing" id="testing">
	<option value="">Selecciona un aopcion</option>
	<option value="1">Valor 1</option>
	<option value="2">Valor 2</option>
	<option value="3">Valor 3</option>
</select>


<script>
	$(document).on('change','#testing', function(){

		var valor = $('#testing option:selected').val();

		if (valor == '') {
			$('.formulario').addClass('hidden');
			alert('ocultar fomulario');
		}
		else if(valor == 1){
			$('.formulario').removeClass('hidden');
			alert('motrar fomulario');

		}

	});

</script>
</body>
</html>
id, institucion, nombre1, cargo1, telefono, email1, nombre2, cargo2, email2, nombre3, cargo3, email3, recursos