<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contagem de Números Pares</title>
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
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }

        form label {
            text-align: left;
            margin-bottom: 5px;
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

        p {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Informe o intervalo de números:</h2>
        <form method="post">
            <label>Início do intervalo:</label>
            <input type="number" name="inicio" required>

            <label>Fim do intervalo:</label>
            <input type="number" name="fim" required>

            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inicio = intval($_POST["inicio"]);
            $fim = intval($_POST["fim"]);
            $quantidade_pares = 0;

            if ($inicio > $fim) {
                echo "<p>O início do intervalo não pode ser maior que o fim.</p>";
            } else {
                for ($i = $inicio; $i <= $fim; $i++) {
                    if ($i % 2 == 0) {
                        $quantidade_pares++;
                    }
                }
                echo "<h3>Quantidade de números pares entre $inicio e $fim: $quantidade_pares</h3>";
            }
        }
        ?>
    </div>
</body>
</html>