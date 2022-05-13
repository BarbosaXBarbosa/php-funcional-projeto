<?php

$dados = require 'dados.php';

$numeroPaises = count($dados);
echo "Números de países: $numeroPaises\n";

function somaMedalhas(int $medalhasAcumuladas, int $medalhas) {
    return $medalhasAcumuladas + $medalhas;
}

$brasil = $dados[0];

$numeroDeMedalhasDoBrasil = array_reduce($brasil['medalhas'], 'somaMedalhas', 0);
echo $numeroDeMedalhasDoBrasil . PHP_EOL;

function medalhasAcumuladas(int $medalhasAcumuladas, array $pais): int 
{
    return $medalhasAcumuladas + array_reduce($pais['medalhas'], 'somaMedalhas', 0);
}

echo array_reduce($dados, 'medalhasAcumuladas', 0);