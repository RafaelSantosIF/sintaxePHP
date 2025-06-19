<?php
echo "<h1>Teste com require_once</h1>";

require_once 'minhas_funcoes.php';
require_once 'minhas_funcoes.php'; // O PHP ignora esta segunda chamada

echo "<p>Chamando a função...</p>";
saudacao();

echo "<p>Observe no resultado que a mensagem de LOG aparece apenas uma vez.</p>";
?>