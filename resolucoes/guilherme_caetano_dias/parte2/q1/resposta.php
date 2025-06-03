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
		<h1>Parte 2 - Questão 1</h1> <!-- Pode alterar esse h1. -->
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2> <!-- Pode deletar todos os parágrafos. -->
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$num1 = $_POST['num1'] ?? 0;
					$num2 = $_POST['num2'] ?? 0;
					$num3 = $_POST['num3'] ?? 0;

					if($num1 > $num2 && $num1 > $num3){
						echo "<p class='alerta-verde'>O 1º Número: $num1, é o maior.</p>";
						if($num2 < $num3){
							echo "<p class='alerta-amarelo'>O 2º Número: $num2, é o menor.</p>";
						}else{
							echo "<p class='alerta-amarelo'>O 3º Número: $num3, é o menor.</p>";
						}
					}elseif($num2 > $num1 && $num2 > $num3){
						echo "<p class='alerta-verde'>O 2º Número: $num2, é o maior.</p>";
						if($num1 < $num3){
							echo "<p class='alerta-amarelo'>O 1º Número: $num1, é o menor.</p>";
						}else{
							echo "<p class='alerta-amarelo'>O 3º Número: $num3, é o menor.</p>";
						}
					}else{
						echo "<p class='alerta-verde'>O 3º Número: $num3, é o maior.</p>";
						if($num1 < $num2){
							echo "<p class='alerta-amarelo'>O 1º Número: $num1, é o menor.</p>";
						}else{
							echo "<p class='alerta-amarelo'>O 2º Número: $num2, é o menor.</p>";
						}
					}
				}
			?>
            <a href="index.php" class="link">Voltar</a> <!-- Adicionar o link de retorno. -->
		</div>
	</div>
</body>
</html>