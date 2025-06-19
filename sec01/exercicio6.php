<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6 - Orçamento</title>
</head>
<body>
    <h1>Cálculo de Orçamento</h1>
    <?php
    $custoMaterial = 1250.00;
    $custoMaoDeObra = 800.50;
    $custoTotal = $custoMaterial + $custoMaoDeObra;

    echo "<p>O custo total do orçamento é: <strong>R$ " . $custoTotal . "</strong>.</p>";
    ?>
</body>
</html>