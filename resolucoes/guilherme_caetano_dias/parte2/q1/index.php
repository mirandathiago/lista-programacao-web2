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
		<h1>Questão 1 - P2 - Número Maior e Menor</h1> <!-- Pode alterar esse h1. -->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.</h2> <!-- Pode alterar esse h2. -->
			<form action="resposta.php" method="post"> <!-- Colocar a ação e o metodo. Além disso, pode deletar todo o conteúdo dentro do formulário, exceto o butão. -->
				<label> 
					Insira o primeiro valor:
					<input type="number" name="num1">
				</label>
				<label>
					Insira o segundo valor:
					<input type="number" name="num2">
				</label>
				<label>
					Insira o terceiro valor:
					<input type="number" name="num3">
				</label>
				<button name="enviar"> Enviar </button> <!-- Não deletar esse butão. -->
			</form>
		</div>		
	</div>
</body>
</html>