<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 28 - Total de Vendas</title>
</head>
<body>
    <h1>Total de Vendas (Simulação de 100 dias)</h1>
    <?php
    $totalVendas = 0.0;
    
    for ($dia = 1; $dia <= 100; $dia++) {
        $vendaDoDia = rand(5000, 500000) / 100; // Gera de 50.00 a 5000.00
        $totalVendas += $vendaDoDia;
    }

    echo "<p>O total de vendas acumulado nos 100 dias foi de <strong>R$ " . number_format($totalVendas, 2, ',', '.') . "</strong>.</p>";
    ?>
</body>
</html>