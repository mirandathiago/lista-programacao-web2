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
		<h1>Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite três números:</h2>
			<form method="post" action="resposta.php">
				<label>Número 1:
					<input type="number" id="num1" name="num1">
				</label>

				<label>Número 2:
					<input type="number" id="num2" name="num2">
				</label>

				<label>Número 3:
					<input type="number" id="num3" name="num3">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>