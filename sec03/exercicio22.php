<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 22 - Itens Pares</title>
</head>
<body>
    <h1>Identificadores de Produtos (Pares)</h1>
    <?php
    for ($id = 2; $id <= 20; $id += 2) {
        echo "<p>ID do Produto: " . $id . "</p>";
    }
    ?>
</body>
</html>