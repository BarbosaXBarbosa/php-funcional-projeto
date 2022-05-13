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

//echo array_reduce($dados, 'medalhasAcumuladas', 0);

function ordenaPais($item1, $item2) {
    $medalhas1 = $item1['medalhas'];
    $medalhas2 = $item2['medalhas'];

    return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro']
        : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
            ? $medalhas2['prata'] - $medalhas1['prata'] 
            : $medalhas2['bronze'] - $medalhas1['bronze']);
};
usort($dados, 'ordenaPais');

var_dump($dados);