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
		<h1>Questão 9 - P2 - Climas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha um clima:</h2>
			<form action="index.php" method="post">
				<label>
					<select name="clima">
						<option></option>
						<option value="ensolarado">Ensolarado</option>
						<option value="ameno">Ameno</option>
						<option value="chuvoso">Chuvoso</option>
						<option value="nublado">Nublado</option>
						<option value="tempestuoso">Tempestuso</option>
					</select>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sugestão:</h2>
			<?php
				if($_SERVER['REQUEST_METHOD'] == "POST"){
					$clima = $_POST['clima'];

					switch($clima){
						case "ensolarado":
							echo "<p class='alerta-verde'>Com o clima ensolarado, recomendamos ir ao clube.</p>";
							break;
						case "ameno":
							echo "<p class='alerta-verde'>Com o clima ameno, recomendamos ir ao parque.</p>";
							break;
						case "chuvoso":
							echo "<p class='alerta-amarelo'>Com o clima chuvoso, recomendamos ir ao cinema.</p>";
							break;
						case "nublado":
							echo "<p class='alerta-amarelo'>Com o clima nublado, recomendamos ir ao museu.</p>";
							break;
						case "tempestuoso":
							echo "<p class='alerta-amarelo'>Com o clima tempestuoso, recomendamos ficar em casa.</p>";
							break;
						default:
							echo "<p class='alerta-vermelho'>Escolha um clima.</p>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>