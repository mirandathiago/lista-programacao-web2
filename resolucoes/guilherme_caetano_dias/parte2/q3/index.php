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
		<h1>Questão 3 - P2 - Bom dia!</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe o seu nome no campo abaixo:</h2>
			<form action="index.php" method="post">
				<label>
					Nome:
					<input type="text" name="nome">
					<button>Enviar</button>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado:</h2>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$hora = date('H');
					$nome = $_POST['nome'] ?? "";
					
					if($hora >= 5 && $hora < 13){
						echo "<p class='alerta-verde'>Bom dia, $nome!</p>";
					}else if($hora >= 13 && $hora < 18){
						echo "<p class='alerta-verde'>Boa tarde, $nome!</p>";
					}else if($hora >= 18 && $hora < 23){
						echo "<p class='alerta-verde'>Boa noite, $nome!</p>";
					}else{
						echo "<p class='alerta-vermelho'>Vá dormir, está de madrugada.";
					}
				}
        	?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>