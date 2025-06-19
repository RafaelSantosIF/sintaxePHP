<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 24 - Processamento Limitado</title>
</head>
<body>
    <h1>Processamento Limitado</h1>
    <?php
    $limite = 50;
    for ($item = 1; $item <= 100; $item++) {
        echo "<p>Processando item " . $item . ".</p>";
        if ($item == $limite) {
            echo "<p><strong>Limite de " . $limite . " itens atingido. Processamento interrompido.</strong></p>";
            break;
        }
    }
    ?>
</body>
</html>