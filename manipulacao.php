<?php

$dados = require 'dados.php';

$numeroPaises = count($dados);
echo "Números de países: $numeroPaises\n";

function convertePaisParaLetraMaiuscula(array $pais) 
{
    $pais['pais'] = strtoupper($pais['pais']);
    return $pais;
}

function verificaSePaisTemEspacoNoNome(array $pais): bool
{
    return strpos($pais['pais'], ' ') !== false;
}

$dados = array_map('convertePaisParaLetraMaiuscula', $dados);
$dados = array_filter($dados, 'verificaSePaisTemEspacoNoNome');  //filtra um array se o item verificado for verdadeiro.
var_dump($dados);