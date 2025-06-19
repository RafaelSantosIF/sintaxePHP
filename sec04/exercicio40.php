<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 40 - Função de Log</title>
</head>
<body>
    <h1>Log de Eventos do Sistema</h1>
    <?php
    date_default_timezone_set('America/Sao_Paulo');

    function registrarLog($mensagem) {
        $dataHora = date('d/m/Y H:i:s');
        echo "<p>[" . $dataHora . "] LOG: " . $mensagem . "</p>";
    }

    registrarLog("Sistema iniciado.");
    registrarLog("Usuário 'jose.olinda' autenticado com sucesso.");
    registrarLog("Acesso à página de relatórios negado para o usuário 'aluno'.");
    ?>
</body>
</html>