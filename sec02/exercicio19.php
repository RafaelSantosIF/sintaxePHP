<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 19 - Folha de Pagamento</title>
</head>
<body>
    <h1>Folha de Pagamento - Salário Base</h1>
    <?php
    $cargo = "Gerente";
    $salarioBase = 0;

    switch ($cargo) {
        case "Desenvolvedor": $salarioBase = 4500.00; break;
        case "Designer": $salarioBase = 3500.00; break;
        case "Gerente": $salarioBase = 7000.00; break;
        default: $salarioBase = 0; break;
    }

    if ($salarioBase > 0) {
        echo "<p>O salário base para o cargo de <strong>" . $cargo . "</strong> é de <strong>R$ " . number_format($salarioBase, 2, ',', '.') . "</strong>.</p>";
    } else {
        echo "<p>O cargo '" . $cargo . "' não foi encontrado.</p>";
    }
    ?>
</body>
</html>