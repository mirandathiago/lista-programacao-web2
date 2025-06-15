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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="POST">
				<label>
					Região:
					<select name="regiao">
						<option></option>
						<option value="norte">Norte</option>
						<option value="nordeste">Nordeste</option>
						<option value="centrooeste">Centro-Oeste</option>
						<option value="suldeste">Suldeste</option>
						<option value="sul">Sul</option>
					</select>
				</label>
				<label>
					Peso:
					<input type="number" name="peso" setp="0.1" placeholder="Insira o peso do pacote.">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($_SERVER['REQUEST_METHOD'] == "POST"){
					$regiao = $_POST['regiao'];
					$peso = $_POST['peso'];

					switch($regiao){
						case "norte":
							$total = 5 + (12 * $peso);
							echo "<p class='alerta-verde'>O frete para a região Norte, com o peso de $peso kg, custará R$ $total.</p>";
							break;
						case "nordeste":
							$total = 4 + (10 * $peso);
							echo "<p class='alerta-verde'>O frete para a região Nordeste, com o peso de $peso kg, custará R$ $total.</p>";
							break;
						case "centrooeste":
							$total = 3 + (9 * $peso);
							echo "<p class='alerta-verde'>O frete para a região Centro-Oeste, com o peso de $peso kg, custará R$ $total.</p>";
							break;
						case "suldeste":
							$total = 2 + (8 * $peso);
							echo "<p class='alerta-verde'>O frete para a região Suldeste, com o peso de $peso kg, custará R$ $total.</p>";
							break;
						case "sul":
							$total = 2.5 + (9.5 * $peso);
							echo "<p class='alerta-verde'>O frete para a região Sul, com o peso de $peso kg, custará R$ $total.</p>";
							break;
						default:
							echo "<p class='alerta-vermelho'>Escolha uma região.</p>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>