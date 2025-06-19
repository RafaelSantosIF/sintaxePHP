<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 34 - Função de Média</title>
</head>
<body>
    <h1>Cálculo de Média de Notas</h1>
    <?php
    function calcularMedia($notas) {
        $soma = array_sum($notas);
        $quantidade = count($notas);
        return $soma / $quantidade;
    }

    $notas_aluno = [7.5, 8.0, 9.5, 6.0];
    $media_final = calcularMedia($notas_aluno);

    echo "<p>A média final do aluno é: <strong>" . number_format($media_final, 2) . "</strong></p>";
    ?>
</body>
</html>