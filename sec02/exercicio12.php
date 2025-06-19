<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12 - Temperatura</title>
</head>
<body>
    <h1>Sensor Meteorológico</h1>
    <?php
    $temperatura = -5;
    $classificacao = "";

    if ($temperatura > 0) {
        $classificacao = "Positiva";
    } elseif ($temperatura < 0) {
        $classificacao = "Negativa";
    } else {
        $classificacao = "Zero";
    }

    echo "<p>A temperatura registrada é de " . $temperatura . "°C. Classificação: <strong>" . $classificacao . "</strong>.</p>";
    ?>
</body>
</html>