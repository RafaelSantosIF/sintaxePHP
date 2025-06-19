<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 37 - Saudação Personalizada</title>
</head>
<body>
    <h1>Saudações</h1>
    <?php
    function saudacaoPersonalizada($nome) {
        echo "<p>Olá, <strong>" . $nome . "</strong>! Seja muito bem-vindo(a) ao painel.</p>";
    }

    saudacaoPersonalizada("Cláudia");
    saudacaoPersonalizada("Roberto");
    ?>
</body>
</html>