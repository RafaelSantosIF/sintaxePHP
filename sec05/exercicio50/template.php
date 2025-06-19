<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <style> body{font-family: sans-serif; background: #fafafa;} .container{max-width: 800px; margin: auto; background: white; padding: 20px;} </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $titulo; ?></h1>
        <hr>
        <section>
            <?php echo $conteudo; ?>
        </section>
    </div>
</body>
</html>