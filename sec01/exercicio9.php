<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9 - Valor de PI</title>
</head>
<body>
    <h1>Valor de π (Pi)</h1>
    <?php
    define("PI", 3.14159265359);
    
    echo "<p>O valor de Pi com 4 casas decimais é: <strong>" . number_format(PI, 4, ',', '.') . "</strong>.</p>";
    ?>
</body>
</html>