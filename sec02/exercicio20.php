<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 20 - Verificação de Acesso</title>
</head>
<body>
    <h1>Simulação de Login</h1>
    <?php
    $usuarioEstaAtivo = true;
    $usuarioEhAdmin = false;
    
    echo "<p>Status: Usuário Ativo (" . ($usuarioEstaAtivo ? 'Sim' : 'Não') . ") | Permissão de Admin (" . ($usuarioEhAdmin ? 'Sim' : 'Não') . ")</p>";

    if ($usuarioEstaAtivo && $usuarioEhAdmin) {
        echo "<p><strong>Acesso Total Concedido.</strong> Bem-vindo, Administrador!</p>";
    } else {
        echo "<p><strong>Acesso Restrito ou Negado.</strong> Você não tem todas as permissões necessárias.</p>";
    }
    ?>
</body>
</html>