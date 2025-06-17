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
		<h1>Par ou Ímpar</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Jogo de Par ou Ímpar</h2>
			<form method="post" action="resposta.php">
				<label>Seu Número (0-10):
					<input type="number" id="numero" name="numero">
				</label>

				Escolha Par ou Ímpar:
					<input type="radio" name="escolha" value="par"> Par
                    <input type="radio" name="escolha" value="impar"> Ímpar<br><br>
			
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>