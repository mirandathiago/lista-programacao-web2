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
		<h1>Descontos dos Produtos</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Valor com desconto:</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$valor = $_POST["valor"];
					$resultado = $valor - (($valor / 100) * 10);
					echo "<p class='alerta-vermelho'>Preço original: R$ $valor</p>";
					echo "<p class='alerta-verde'>Preço com desconto: R$ $resultado</p>";
				}
        	?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>