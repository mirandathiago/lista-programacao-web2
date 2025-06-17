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
		<h1>Números Pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Contar Pares</h2>
			<form method="post" action="resposta.php">
				
				<label>Início:
					<input type="number" name="inicio">
                </label>

				<label>Fim:
					<input type="number" name="fim">
                </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>