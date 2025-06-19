<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14 - Agenda Semanal</title>
</head>
<body>
    <h1>Agenda Semanal</h1>
    <?php
    $diaDaSemana = 4; // 1: Domingo, 2: Segunda, ..., 7: Sábado
    $nomeDoDia = "";

    switch ($diaDaSemana) {
        case 1: $nomeDoDia = "Domingo"; break;
        case 2: $nomeDoDia = "Segunda-feira"; break;
        case 3: $nomeDoDia = "Terça-feira"; break;
        case 4: $nomeDoDia = "Quarta-feira"; break;
        case 5: $nomeDoDia = "Quinta-feira"; break;
        case 6: $nomeDoDia = "Sexta-feira"; break;
        case 7: $nomeDoDia = "Sábado"; break;
        default: $nomeDoDia = "Dia inválido"; break;
    }

    echo "<p>O número " . $diaDaSemana . " corresponde a: <strong>" . $nomeDoDia . "</strong>.</p>";
    ?>
</body>
</html>