<?php

$dados = require 'dados.php';

$numeroPaises = count($dados);
echo "Números de países: $numeroPaises\n";

function convertePaisParaLetraMaiuscula(array $pais) {
    $pais['pais'] = strtoupper($pais['pais']);
    return $pais;
}

$dados = array_map('convertePaisParaLetraMaiuscula', $dados);

var_dump($dados);