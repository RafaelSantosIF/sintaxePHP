<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 17 - Alerta Climático</title>
</head>
<body>
    <h1>Alerta Climático</h1>
    <?php
    $temperaturaAtual = 28;
    $alerta = "";

    if ($temperaturaAtual < 0) {
        $alerta = "Alerta de Gelo!";
    } elseif ($temperaturaAtual <= 15) {
        $alerta = "Clima Ameno";
    } elseif ($temperaturaAtual <= 25) {
        $alerta = "Clima Agradável";
    } else {
        $alerta = "Atenção: Calor Extremo!";
    }

    echo "<p>Com a temperatura atual de " . $temperaturaAtual . "°C, o alerta é: <strong>" . $alerta . "</strong></p>";
    ?>
</body>
</html>