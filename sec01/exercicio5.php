<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 - Tipo de Dado</title>
</head>
<body>
    <h1>Preço de Venda e Tipo de Dado</h1>
    <?php
    $precoUnitario = 59.99;
    $tipoDaVariavel = gettype($precoUnitario);

    echo "<p>O preço unitário do item é R$ " . $precoUnitario . ".</p>";
    echo "<p>O tipo da variável de preço é: <strong>" . $tipoDaVariavel . "</strong>.</p>";
    ?>
</body>
</html>