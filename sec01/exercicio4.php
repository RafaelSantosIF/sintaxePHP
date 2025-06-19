<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4 - Status do Pedido</title>
</head>
<body>
    <h1>Status de Pedido</h1>
    <?php
    $pedidoPago = false;

    if ($pedidoPago == true) {
        echo "<p>Status do pedido: <strong>Confirmado e pago.</strong></p>";
    } else {
        echo "<p>Status do pedido: <strong>Aguardando pagamento.</strong></p>";
    }
    ?>
</body>
</html>