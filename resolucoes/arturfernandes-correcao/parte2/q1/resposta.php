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
		<h1>Maior e Menor Número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n1 = $_POST["num1"];
                $n2 = $_POST["num2"];
                $n3 = $_POST["num3"];

                $maior = $n1;
                $menor = $n1;

    
                if ($n2 > $maior) {
                $maior = $n2;
                }
                if ($n3 > $maior) {
                $maior = $n3;
                }

                if ($n2 < $menor) {
                $menor = $n2;
                }
                if ($n3 < $menor) {
                $menor = $n3;
                }

                echo "<h3>Resultado:</h3>";
                echo "Maior número: $maior<br>";
                echo "Menor número: $menor";
                }
            ?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>