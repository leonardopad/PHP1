<?php 

$nomeMinusculo = 'leonardo padilha fontana';
$nomeMaiusculo = 'LEONARDO PADILHA FONTANA';

echo strtoupper($nomeMinusculo) . PHP_EOL;
echo strtolower($nomeMaiusculo) . PHP_EOL;
echo ucwords($nomeMinusculo) .PHP_EOL;

$frase = 'Anão, Paraguaio, Cortina, Surpresa, Perdi';
$palavrasSeparadas = explode(',',$frase);
print_r($palavrasSeparadas);


$fraseSeparadaPorEspacos = implode('-----', $palavrasSeparadas). PHP_EOL;
echo $fraseSeparadaPorEspacos;
$frase2 = 'Perdi meu fusca na ladeira';

$fraseCorrigida = str_replace('Perdi', 'achei', $frase2);
echo $fraseCorrigida;