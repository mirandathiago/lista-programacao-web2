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
		<div class="box formulario">
			<h2>Qual é o maior e o menor número</h2>
			<form action="resposta.php" method="POST">
				<label>Número 1:
					<input type="number" name="num1" required>
				</label>
				<label>Número 2:
					<input type="number" name="num2" required>
				</label>
				<label>Número 3:
					<input type="number" name="num3" required>
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>