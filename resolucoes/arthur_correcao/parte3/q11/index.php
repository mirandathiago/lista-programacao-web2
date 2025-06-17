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
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione suas frutas favoritas:</h2>
			<form method="post" action="resposta.php">
				
				<label>Maçã:
					<input type="checkbox" name="frutas[]" value="Maçã">
                </label>

				<label>Banana:
					<input type="checkbox" name="frutas[]" value="Banana">
                </label>

				<label>Morango:
					<input type="checkbox" name="frutas[]" value="Morango">
                </label>

				<label>Uva:
					<input type="checkbox" name="frutas[]" value="Uva">
                </label>

				<label>Abacaxi:
					<input type="checkbox" name="frutas[]" value="Abacaxi">
                </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>