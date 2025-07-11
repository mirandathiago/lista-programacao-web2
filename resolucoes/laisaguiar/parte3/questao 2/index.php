<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabuada com WHILE</title>
    <style>
body {
    background-color: #f0f4f8;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

h2, h3 {
    color: #333333;
}

form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

form input, form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #cccccc;
    font-size: 16px;
}

form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}

ul {
    text-align: left;
    margin-top: 20px;
}
</style>
</head>
<body>
    <h2>Calculadora de Tabuada</h2>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $contador = 1;

        echo "<h3>Tabuada do número $numero:</h3>";

        while ($contador <= 10) {
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado<br>";
            $contador++;
        }
    }
    ?>
</body>
</html>
