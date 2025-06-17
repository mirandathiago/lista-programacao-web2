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
					$inicio = $_POST["inicio"];
                    $fim = $_POST["fim"];
                    $pares = 0;

					for ($i = $inicio; $i <= $fim; $i++) {
                        if ($i % 2 == 0) {
                            $pares++;
                        }
                    }

					echo "<p>Quantidade de pares: $pares</p>";
					
				}
            ?>       
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>