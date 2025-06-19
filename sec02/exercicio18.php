<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 18 - Preferência de Cor</title>
</head>
<body>
    <h1>Preferência de Cor do Tema</h1>
    <?php
    $corEscolhida = "Verde";

    if ($corEscolhida == "Vermelho" || $corEscolhida == "Azul" || $corEscolhida == "Verde") {
        echo "<p>A cor do tema foi alterada para <strong>" . $corEscolhida . "</strong>.</p>";
    } else {
        echo "<p>A cor '" . $corEscolhida . "' não é uma opção válida. A cor padrão 'Azul' foi mantida.</p>";
    }
    ?>
</body>
</html>