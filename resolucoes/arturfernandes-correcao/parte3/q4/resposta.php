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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$n = $_POST["n"];
                    $soma = 0;

					for ($i = 1; $i <= $n; $i++) {
                        $soma += $i;
                    }

					echo "<p>Soma de 1 a $n = $soma</p>";
					
				}
            ?>       
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>