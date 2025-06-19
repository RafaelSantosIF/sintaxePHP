<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 32 - Função de Soma</title>
</head>
<body>
    <h1>Calculadora Básica - Soma</h1>
    <?php
    function somar($num1, $num2) {
        $resultado = $num1 + $num2;
        echo "<p>A soma de " . $num1 . " e " . $num2 . " é: <strong>" . $resultado . "</strong></p>";
    }

    somar(15, 30);
    somar(100, 88);
    ?>
</body>
</html>