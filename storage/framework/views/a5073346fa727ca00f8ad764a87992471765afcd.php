<html>
	<head>
		<title>Seleção de Estados e Cidades - JSON</title>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript"> google.load("jquery", "1.4.2");</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	</head>
	<body>
		<select id='uf'>
			<option> Selecione a UF </option>
		</select>

		<select id='cidade'>
			<option> Selecione a Cidade </option>
		</select>
	</body>
</html>

<script type="text/javascript">
	$.getJSON('/api/v1/uf', function(j){
		for (var i = 0; i < j.length; i++) {
			options = '<option value="' + j[i].CO_UF + '">' + j[i].NO_UF + '</option>';
			$('#uf').append(options);
		}	
	});


	$('#uf').change(function(){
		$('#cidade').empty();
		if($(this).val()){
			$.getJSON('/api/v1/City/'+$(this).val(), function(city){	
				for (var i = 0; i < city.length; i++) {
					options = '<option value="' + city[i].COD_IBGE + '">' + city[i].NO_MU + '</option>';
					$('#cidade').append(options);
				}
			});
		} else {
			$('#cidade').append('<option> Nenhuma cidade para essa UF </option>');
		}
	});
</script><?php /**PATH /Users/pierre/Desktop/LAIS/desenvolvimento/Laravel service with JSON/resources/views/API/index.blade.php ENDPATH**/ ?>