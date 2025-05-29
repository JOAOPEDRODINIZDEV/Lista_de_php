<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="calculadora">
    <h2>Calculadora Básica</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Número 1" required>
        <input type="number" name="num2" placeholder="Número 2" required>
        <button type="submit">Somar</button>
    </form>

    <div class="resultado">
        <?php
        function somar($a, $b) {
            $resultado = $a + $b;
            echo "<p>O resultado da soma é: <strong>$resultado</strong></p>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            somar($num1, $num2);
        }
        ?>
    </div>
</div>

</body>
</html>
