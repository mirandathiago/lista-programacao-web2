<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<style>
		.linha{
			text-align: center;
			color: green;
		}
	</style>
</head>
<body>
	<header>
		<h1>Questão 10 - P3 - Padrão de Asrteriscos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Altura da Árvore</h2>
			<form action="index.php" method="post">
				<label>
					Número de linhas:
					<input type="number" name="linhas">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Árvore de asteriscos (*).</h2>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$linhas = $_POST['linhas'] ?? 0;

					for($i = 1; $i <= $linhas; $i++){
						echo "<p class='linha'>";
						for($j = 0; $j < $i; $j++){
							echo "* ";
						}
						echo "</p>";
					}
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>