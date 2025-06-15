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
		<h1>Questão 1 - P3 - Lista de Compras</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Lista de Compras:</h2>
			<?php
				$compras = ['Feijão', 'Arroz', 'Macarrão', 'Pão', 'Óleo', 'Aveia', 'Batata', 'Canoura', 'Beterraba'];

				echo "<ul>";
				foreach($compras as $a){
					echo "<li>$a</li>";
				}
				echo "</ul>";
			?>
		</div>
	</div>
</body>
</html>