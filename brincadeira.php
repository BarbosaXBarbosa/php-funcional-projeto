<?php

/*function qualquer(): string
{
    return  'Olá mundo!';
}
*/

$variavel ='teste';

function outra($funcao): void
{
    echo 'Executando outra função:';
    echo $funcao();
}

$nomeDaFuncao = function() use ($variavel) {
    echo $variavel;
    return 'Uma outra função';
};

outra($nomeDaFuncao);

var_dump($nomeDaFuncao);