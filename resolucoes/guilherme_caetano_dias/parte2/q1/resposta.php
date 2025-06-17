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
		<h1>Questão 1 - P2 - Número Maior e Menor</h1> <!-- Pode alterar esse h1. -->
	</header> 
	<div class="container">
		<div class="box resposta">
			<h2>O maior número e o menor número respectivamente:</h2> <!-- Pode deletar todos os parágrafos. -->
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$num1 = $_POST['num1'] ?? 0;
					$num2 = $_POST['num2'] ?? 0;
					$num3 = $_POST['num3'] ?? 0;

					if($num1 > $num2 && $num1 > $num3){
                    	echo "<p class='alerta-verde'>Maior número: $num1</p>";
						if($num2 > $num3){
							echo "<p class='alerta-vermelho'>Menor número: $num3</p>";
						}else{
							echo "<p class='alerta-vermelho'>Menor número: $num2</p>";
						}
					}else if($num2 > $num1 && $num2 > $num3){
						echo "<p class='alerta-verde'>Maior número: $num2</p>";
						if($num1 > $num3){
							echo "<p class='alerta-vermelho'>Menor número: $num3</p>";
						}else{
							echo "<p class='alerta-vermelho'>Menor número: $num1</p>";
						}
					}else if($num3 > $num2 && $num3 > $num2){
						echo "<p class='alerta-verde'>Maior número: $num3</p>";
						if($num2 > $num1){
							echo "<p class='alerta-vermelho'>Menor número: $num1</p>";
						}else{
							echo "<p class='alerta-vermelho'>Menor número: $num2</p>";
						}
					}
				}
			?>
            <a href="index.php" class="link">Voltar</a> <!-- Adicionar o link de retorno. -->
		</div>
	</div>
</body>
</html>