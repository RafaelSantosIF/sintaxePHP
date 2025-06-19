<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 33 - Função de Custo</title>
</head>
<body>
    <h1>Cálculo de Custo com Função</h1>
    <?php
    function calcularCustoTotal($preco, $quantidade) {
        return $preco * $quantidade;
    }

    $custo_produto_A = calcularCustoTotal(19.99, 3);
    $custo_produto_B = calcularCustoTotal(50.00, 2);
    $custo_geral = $custo_produto_A + $custo_produto_B;

    echo "<p>Custo do Produto A: R$ " . $custo_produto_A . "</p>";
    echo "<p>Custo do Produto B: R$ " . $custo_produto_B . "</p>";
    echo "<h3>O custo total da compra é: R$ " . $custo_geral . "</h3>";
    ?>
</body>
</html>