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
		<h1>Parte 2 - questao 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>qual é o maior e menor número</h2>
			<form action="resposta.php" method="POST">
				<label>Numero 1:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>numero 2:
					<input type="email" id="email" name="email" required>
				</label>

				<label>numero 3:
					<input type="tel" id="telefone" name="telefone" required>
				</label>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>