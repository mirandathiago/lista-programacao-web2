<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>parte 2 questao 1</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php 
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$num1 = $_POST["num1"] ?? 0;
				$num2 = $_POST["num2"] ?? 0;
				$num3 = $_POST["num3"] ?? 0;

				if($num1>$num2 && $num1>$num3){
					echo "<p class='alerta-verde'>".$num1." é o maior número</p>";
				}else if($num2>$num1 && $num2>$num3){
					echo "<p class='alerta-verde'>".$num2." é o maior número</p>";
				}else if($num3>$num1 && $num3>$num2){
					echo "<p class='alerta-verde'>".$num3." é o maior número</p>";
				};
				if($num1<$num2 && $num1<$num3){
					echo "<p class='alerta-vermelho'>".$num1." é o menor número</p>";
				}else if($num2<$num1 && $num2<$num3){
					echo "<p class='alerta-vermelho'>".$num2." é o menor número</p>";
				}else if($num3<$num1 && $num3<$num2){
					echo "<p class='alerta-vermelho'>".$num3." é o menor número</p>";
				}
			}
			?>
		</div>
	</div>
</body>
</html>