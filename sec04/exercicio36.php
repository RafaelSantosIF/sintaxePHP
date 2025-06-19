<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 36 - Função de Elegibilidade</title>
</head>
<body>
    <h1>Sistema de Elegibilidade (Refatorado)</h1>
    <?php
    function verificarMaioridade($idade) {
        if ($idade >= 18) {
            return "Elegível (Maior de idade)";
        } else {
            return "Não elegível (Menor de idade)";
        }
    }

    $idade_visitante = 17;
    $status = verificarMaioridade($idade_visitante);
    
    echo "<p>Com " . $idade_visitante . " anos, o status do visitante é: <strong>" . $status . "</strong>.</p>";
    ?>
</body>
</html>