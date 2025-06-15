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
		<h1>Questão 1 - P3 - Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escreva um número:</h2>
			<form action="index.php" method="post">
				<label>
					Número:
					<input type="number" name="num">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Fatorial:</h2>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$num = $_POST['num'] ?? 0;

					if($num != 0){
						for($i = $num - 1; $i > 0; $i--){
							$num = $num * $i;
						}
						echo "<p class='alerta-verde'>O fatorial é $num.</p>";
					}else{
						echo "<p class='alerta-verde'>O fatorial é 1.</p>";
					}
				}
        	?>
		</div>
	</div>
</body>
</html>