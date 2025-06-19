<?php
echo "<p>1. Antes de tentar incluir o arquivo inexistente...</p>";
include 'arquivo_que_nao_existe.php'; // Vai gerar um Warning
echo "<p>2. Esta linha SERÁ executada, pois o 'include' não para o script.</p>";
?>

<?php
echo "<p>1. Antes de tentar requisitar o arquivo inexistente...</p>";
require 'arquivo_que_nao_existe.php'; // Vai gerar um Fatal Error
echo "<p>2. Esta linha NUNCA será executada, pois o 'require' para o script.</p>";
?>