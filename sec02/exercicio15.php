<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 15 - Menu da Cafeteria</title>
</head>
<body>
    <h1>Menu da Cafeteria</h1>
    <?php
    $bebida = "Chá";

    switch ($bebida) {
        case "Café":
        case "Chá":
        case "Suco":
            echo "<p>Você escolheu <strong>" . $bebida . "</strong>. Excelente pedido!</p>";
            break;
        default:
            echo "<p>Desculpe, a bebida '" . $bebida . "' não está disponível.</p>";
            break;
    }
    ?>
</body>
</html>