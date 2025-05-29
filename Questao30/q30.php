 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuadas de 1 a 5</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h1>Tabuadas de 1 a 5</h1>

<div class="container">
    <?php
    for ($num = 1; $num <= 5; $num++) {
        echo "<div class='tabuada'>";
        echo "<h2>Tabuada do $num</h2>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "<p>$num x $i = $resultado</p>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
