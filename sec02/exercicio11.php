<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11 - Controle de Acesso</title>
</head>
<body>
    <h1>Controle de Acesso da Portaria</h1>
    <?php
    $idadeVisitante = 21;

    if ($idadeVisitante >= 18) {
        echo "<p>Idade: " . $idadeVisitante . " anos. <strong>Acesso Liberado</strong>.</p>";
    } else {
        echo "<p>Idade: " . $idadeVisitante . " anos. <strong>Acesso Negado</strong>.</p>";
    }
    ?>
</body>
</html>