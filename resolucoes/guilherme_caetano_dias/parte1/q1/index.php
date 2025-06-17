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
		<h1>Questão 1 - P1 - Descontos dos Produtos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o valor do produto:</h2>
			<form action="resposta.php" method="post">
				<label>
					Insira um valor do produto:
					<input type="number" name="valor" step="0.01">
				</label>
				<button name="enviar"> Enviar </button>
    		</form>
		</div>		
	</div>
</body>
</html>