<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 39 - Função de Área</title>
</head>
<body>
    <h1>Cálculo de Área de Terreno</h1>
    <?php
    function calcularAreaTerreno($largura, $comprimento) {
        return $largura * $comprimento;
    }

    $area = calcularAreaTerreno(10, 25);

    echo "<p>A área do terreno é de <strong>" . $area . "m²</strong>.</p>";
    ?>
</body>
</html>