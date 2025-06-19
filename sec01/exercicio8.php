<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8 - Mudança de Categoria</title>
</head>
<body>
    <h1>Mudança de Categoria</h1>
    <?php
    $codigoProduto = "PROD-2024-X";
    echo "<p>O código da categoria antes da atualização era: <strong>" . $codigoProduto . "</strong>.</p>";
    
    $codigoProduto = 105;
    echo "<p>O código da categoria após a atualização é: <strong>" . $codigoProduto . "</strong>.</p>";
    ?>
</body>
</html>