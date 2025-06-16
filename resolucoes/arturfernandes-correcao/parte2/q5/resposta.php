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
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
            if ($_POST) {
                $usuario = $_POST["numero"];
                $escolha = $_POST["escolha"];

                $computador = rand(0, 10);
                $soma = $usuario + $computador;
                $resultado = ($soma % 2 == 0) ? "par" : "impar";

                echo "O usuário escolheu $escolha e o número $usuario.<br>";
                echo "O computador sorteou o número $computador, e a soma deles é $soma.<br>";

                if ($resultado === $escolha) {
                echo "$soma é $resultado e o usuário venceu!";
                } else {
                echo "$soma é $resultado e o computador venceu!";
                }
            }
            ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>