<?php

$dados = require 'dados.php';


function comparaMedalhas(array $medalhasPais1, array $medalhasPais2): callable
{
    return function (string $modalidade) use ($medalhasPais1, $medalhasPais2): int 
    {
        return $medalhasPais2[$modalidade] <=> $medalhasPais1[$modalidade];
    };
}


usort($dados, function ($pais1, $pais2) {
    $medalhasPais1 = $pais1['medalhas'];
    $medalhasPais2 = $pais2['medalhas'];
    $comparador = comparaMedalhas($medalhasPais1, $medalhasPais2);

    return  $comparador('ouro') !== 0 ? $comparador('ouro')
           :($comparador('prata') !== 0 ? $comparador('prata')
           :$comparador('bronze'));
});

var_dump($dados);