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
		<div class="box formulario">
			<h2>Onde Ir?</h2>
			<form method="post" action="resposta.php">
				<label>Clima:

                    <select name="clima">
                        <option value="ensolarado">Ensolarado</option>
                        <option value="ameno">Ameno</option>
                        <option value="chuvoso">Chuvoso</option>
                        <option value="nublado">Nublado</option>
                        <option value="tempestuoso">Tempestuoso</option>
                    </select>

                </label><br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>