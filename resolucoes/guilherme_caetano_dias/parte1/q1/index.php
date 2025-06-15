<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Parte 1 - Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Descontos dos Produtos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.</h2>
			<form action="resposta.php" method="post">
				<label>
					Insira um valor do produto:
					<input type="number" name="valor" step="0.1">
				</label>
    		</form>
		</div>		
	</div>
</body>
</html>