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
		<div class="box formulario">
			<h2>Parte 2 - Questão 1</h2> <!-- Pode alterar esse h2. -->
			<form action="resposta.php" method="post"> <!-- Colocar a ação e o metodo. Além disso, pode deletar todo o conteúdo dentro do formulário, exceto o butão. -->
				<label>
					Numero 1:
					<input type="number" name="num1" required>
				</label>
				<label>
					Numero 2:
					<input type="number" name="num2" required>
				</label>
				<label>
					Numero 3:
					<input type="number" name="num3" required>
				</label>
				<button name="enviar"> Enviar </button> <!-- Não deletar esse butão. -->
			</form>
		</div>		
	</div>
</body>
</html>