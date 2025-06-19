<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 38 - Função de Formatação</title>
</head>
<body>
    <h1>Formatação de Preços</h1>
    <?php
    function formatarComoMoeda($valor) {
        return "R$ " . number_format($valor, 2, ',', '.');
    }

    $preco_a = 1547.5;
    $preco_b = 89.9;

    echo "<p>Preço do item A: <strong>" . formatarComoMoeda($preco_a) . "</strong></p>";
    echo "<p>Preço do item B: <strong>" . formatarComoMoeda($preco_b) . "</strong></p>";
    ?>
</body>
</html>