<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 29 - Ciclo de Produção</title>
</head>
<body>
    <h1>Ciclo de Produção</h1>
    <?php
    $quantidadeProduzida = 0;
    $meta = 5;
    $ciclo = 1;
    
    echo "<p>Meta de produção: " . $meta . " itens.</p>";

    while ($quantidadeProduzida < $meta) {
        $quantidadeProduzida++;
        echo "<p>Ciclo " . $ciclo . ": Quantidade atual na linha de produção: <strong>" . $quantidadeProduzida . "</strong>.</p>";
        $ciclo++;
    }

    echo "<strong>Produção finalizada!</strong>";
    ?>
</body>
</html>