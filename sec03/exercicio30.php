<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 30 - Tabuadas</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f2f5; color: #333; }
        h1 { text-align: center; color: #4a4a4a; }
        .container { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px; }
        .tabuada { width: 200px; background-color: white; padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .tabuada h3 { margin-top: 0; color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 5px; }
        .tabuada p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Tabelas de Referência</h1>
    <div class="container">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='tabuada'>";
            echo "<h3>Tabuada do " . $i . "</h3>";
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "<p>" . $i . " x " . $j . " = <strong>" . $resultado . "</strong></p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>