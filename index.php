<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RANDOM!</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
	.container{
		text-align: center;
	}

	.form{
		text-align: center;
		width: 500px;
		border: none;
		font-size: 20px;
	}
	</style>

</head>
<body>
	<div class="container" >
		<h1>Código alfanumérico aleatorio</h1>
	</div>
	
	<div class="container">
		<form action="codigo.php" method="post">
			<input type="text" id="num" name="num" placeholder="Escribe aquí el número de caracteres" class= "form"> <br> <br>
			<input type="submit" name="codigo" id="codigo" value="GENERAR CÓDIGO" class="btn btn-primary">
		</form>
	</div>		
</body>
</html>


