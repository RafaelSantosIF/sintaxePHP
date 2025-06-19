<?php

function formatarComoMoeda($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}

function ehMaiorDeIdade($idade) {
    return $idade >= 18;
}