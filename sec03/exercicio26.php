<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 26 - Entrada de Dados</title>
</head>
<body>
    <h1>Entrada de Dados Repetitiva (Simulação)</h1>
    <?php
    $entradas = [15, 7, 22, 0, 10, 5];
    $indice = 0;
    $entradaAtual = 0;
    
    echo "<p>Iniciando leitura de dados. O programa para ao ler o valor 0.</p>";
    
    do {
        $entradaAtual = $entradas[$indice];
        echo "<p>Valor lido: " . $entradaAtual . "</p>";
        $indice++;
    } while ($entradaAtual != 0 && $indice < count($entradas));

    echo "<strong>Fim da simulação.</strong>";
    ?>
</body>
</html>