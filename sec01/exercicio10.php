<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10 - Contagem de Caracteres</title>
</head>
<body>
    <h1>Contagem de Caracteres de Resumo</h1>
    <?php
    $resumo = "Para o IFCE, o resumo deve conter entre 350 e 500 palavras. Este texto serve como exemplo para a contagem de caracteres solicitada no exercício, utilizando uma função nativa da linguagem PHP para realizar a tarefa.";
    $totalCaracteres = strlen($resumo);

    echo "<blockquote>" . $resumo . "</blockquote>";
    echo "<p>O resumo acima contém <strong>" . $totalCaracteres . "</strong> caracteres.</p>";
    ?>
</body>
</html>