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
		<h1>Local</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $clima = $_POST["clima"];

                    switch ($clima) {
                        case "ensolarado":
                            echo "<p>Vá para o Clube! </p>";
                        break;

                        case "ameno":
                            echo "Visite o Parque! </p>";
                        break;

                        case "chuvoso":
                            echo "Ótimo dia para o Cinema!</p>";
                        break;

                        case "nublado":
                            echo "Explore um Museu! </p>";
                        break;

                        case "tempestuoso":
                            echo "<p>Fique em casa!</p>";
                        break;

                        default:
                            echo "<p>Clima inválido!</p>";
                        }
                }
            ?>       
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
	
</body>
</html>