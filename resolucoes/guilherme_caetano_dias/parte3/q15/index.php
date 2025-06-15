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
		<h1>Questão 15 - P3 - Nomes e Notas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Nomes e notas:</h2>
			<?php
				$alunos = [
					"Mateus" => 8.9,
					"Leonardo" => 4.9,
					"Thiago" => 9.5,
					"Letícia" => 10,
					"Marcos" => 1,
					"Gildalva" => 7.3
				];

				echo "<ul>";
				foreach($alunos as $nome => $nota){
					if($nota >= 6){
						echo "<li>$nome foi aprovado(a): $nota</li>";
					}else{
						echo "<li>$nome foi reprovado(a): $nota</li>";
					}
				}
				echo "</ul>";
			?>
		</div>
	</div>
</body>
</html>