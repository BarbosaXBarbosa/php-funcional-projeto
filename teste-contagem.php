<?php

$dados = require 'dados.php';


function plusMedal(int $medalAccompanied, int $medal) {
    return $medalAccompanied + $medal;
}

$numberMedal = array_map(function (array $pais) {
    return($pais['medalhas']);
}, $dados);


echo array_reduce($numberMedal, function (int $medalAccompanied, array $medal) {
    return $medalAccompanied + array_reduce($medal, 'plusMedal',0);
}, 0);