<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 16 - Estado Civil</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <?php
    $codigoEstadoCivil = 's'; // Pode ser C, S, D, O
    $descricao = "";

    switch (strtoupper($codigoEstadoCivil)) {
        case 'C': $descricao = "Casado(a)"; break;
        case 'S': $descricao = "Solteiro(a)"; break;
        case 'D': $descricao = "Divorciado(a)"; break;
        case 'O': $descricao = "Outro"; break;
        default: $descricao = "Código Inválido"; break;
    }

    echo "<p>Código informado: " . $codigoEstadoCivil . "<br>Estado Civil: <strong>" . $descricao . "</strong>.</p>";
    ?>
</body>
</html>