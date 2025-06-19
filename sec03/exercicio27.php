<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 27 - Lista de Participantes</title>
</head>
<body>
    <h1>Lista de Participantes do Evento</h1>
    <ul>
        <?php
        $participantes = ["Carlos Silva", "Joana Pereira", "Marcos Almeida", "Lúcia Ferreira", "Pedro Costa"];
        
        foreach ($participantes as $nome) {
            echo "<li>" . $nome . "</li>";
        }
        ?>
    </ul>
</body>
</html>