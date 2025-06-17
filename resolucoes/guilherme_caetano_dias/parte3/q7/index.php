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
		<h1>Questão 7 - P3 - Quantidade de Cédulas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o valor:</h2>
			<form action="index.php" method="post">
				<label>
					Valor(R$):
					<input type="number" name="valor">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Quantidade mínima de cédulas:</h2>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$valor = $_POST['valor'] ?? 0;
					$n100 = 0;
					$n50 = 0;
					$n20 = 0;
					$n10 = 0;
					$n5 = 0;
					$n2 = 0;
					$n1 = 0;

					while($valor > 0){
						if($valor - 100 >= 0){
							$valor -= 100;
							$n100 += 1;
						}else if($valor - 50 >= 0){
							$valor -= 50;
							$n50 += 1;
						}else if($valor - 20 >= 0){
							$valor -= 20;
							$n20 += 1;
						}else if($valor - 10 >= 0){
							$valor -= 10;
							$n10 += 1;
						}else if($valor - 5 >= 0){
							$valor -= 5;
							$n5 += 1;
						}else if($valor - 2 >= 0){
							$valor -= 2;
							$n2 += 1;
						}else{
							$valor--;
							$n1++;
						}
					}

					echo "
						<ul>
							<li>$n100 nota(s) de R$100</li>
							<li>$n50 nota(s) de R$50</li>
							<li>$n20 nota(s) de R$20</li>
							<li>$n10 nota(s) de R$10</li>
							<li>$n5 nota(s) de R$5</li>
							<li>$n2 nota(s) de R$2</li>
							<li>$n1 nota(s) de R$1</li>
						</ul>
					";
				}
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>