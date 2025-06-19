<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 25 - Relatório de Notas</title>
</head>
<body>
    <h1>Relatório de Notas de PWEB1</h1>
    <table border="1" style="width: 50%; border-collapse: collapse;">
        <tr style="background-color: #f2f2f2;">
            <th>Matrícula</th>
            <th>Nome Completo</th>
            <th>Nota</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $matricula = "20240100" . $i;
            $nome = "Aluno Fictício " . $i;
            $nota = rand(0, 100) / 10;
            echo "<tr>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . number_format($nota, 1, ',') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>