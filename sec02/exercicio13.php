<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13 - Média do Aluno</title>
</head>
<body>
    <h1>Sistema de Avaliação</h1>
    <?php
    $nota1 = 8.5;
    $nota2 = 6.0;
    $media = ($nota1 + $nota2) / 2;
    $status = "";

    if ($media >= 7) {
        $status = "Aprovado";
    } elseif ($media >= 5) {
        $status = "Recuperação";
    } else {
        $status = "Reprovado";
    }

    echo "<p>Notas: " . $nota1 . " e " . $nota2 . ".<br>Média Final: " . $media . ".</p>";
    echo "<p>Situação do aluno: <strong>" . $status . "</strong>.</p>";
    ?>
</body>
</html>