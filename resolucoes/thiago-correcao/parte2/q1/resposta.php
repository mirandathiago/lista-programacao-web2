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
		<h1>Parte 2 - Questão 1</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$num1 = $_POST['num1'] ?? 0;
				$num2 = $_POST['num2'] ?? 0;
				$num3 = $_POST['num3'] ?? 0;

				if($num1 > $num2 && $num1 > $num3){
					echo "<p class='alerta-verde'> O número 1: $num1 é o maior </p>";
					if($num2 < $num3){
						echo "<p class='alerta-amarelo'>O número 2: $num2 é o menor </p>";
					}else{
						echo "<p class='alerta-amarelo'>O número 3: $num3 é o menor</p>";
					}
				}else if($num2 > $num1 && $num2 > $num3){
					echo "<p class='alerta-verde'>O número 2: $num2 é o maior </p>";
					if($num1 < $num3){
						echo "<p class='alerta-amarelo'>O número 1: $num1 é o menor</p>";
					}else{
						echo "<p class='alerta-amarelo'>O número 3: $num3 é o menor</p>";
					}
				}else{
					echo "<p class='alerta-verde'>O número 3: $num3 é o maior</p>";
					if($num2 < $num1){
						echo "<p class='alerta-amarelo'>O número 2: $num2 é o menor</p>";
					}else{
						echo "<p class='alerta-amarelo'>O número 1: $num1 é o menor</p>";
					}
				}

			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>