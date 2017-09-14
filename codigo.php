<?php 
	if (isset($_POST["codigo"])) {
		$num = $_POST["num"];
?>
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
	#resultado{
		text-align: center;
		font-size: 20px;
		color: #6c93d1;
		border-radius: 10px;
	}
	</style>
</head>
<body>
	<div class="container">
		<h1>Tu código es:</h1>
	</div>
	<div class="container" id="resultado">
		<?php
			function codigo($num){
				$codigo = "";
				for ($i=0; $i < $num; $i++) {
					$caracteres = array("a","b","c","e","f","g","h","i","j","k","l","m","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0","A","B","C","D","E","F","G","H","Y","J","K","L","M","N","O","P","Q","R","T","S","U","V","W","Y","X","Z","#");
					$countcaracteres = count($caracteres)-1;
					$randnum = rand(0,$countcaracteres);
					$codigo =  $codigo . $caracteres[$randnum];
				}
				return $codigo;
			}
			echo codigo($num);
		?>


		<!-- SOLUCION EDU
			function claveAlpha($digitos){
				
				$strcaracter = "A B C D E F G H Y G K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z 0 1 2 3 4 5 6 7 8 9";
				
				$arraycaracter = explode(" ", $strcaracter);
				$clave = "";
				for ($i=0; $i < $digitos; $i++) {
					$intale = rand(0, count($arraycaracter)-1);
					$charale = $arraycaracter[$intale];
					$clave .= $charale;
				}
				return $clave;
			}
			echo claveAlpha(5);

	-->
		<div class="container">
		<form action="codigo.php" method="post">
			<input type="hidden" id="num" name="num" value="<?=$num?>"> <br>
			<input type="submit" name="codigo" id="codigo" value="CALCULAR OTRO CÓDIGO" class="btn btn-primary">
		</form>
	</div>
	</div>
	

</body>
</html>

<?php 
	} else{
		echo "Error";
	}

 ?>