<?php

echo '-------------------- calculadora php -------- ' . PHP_EOL;
$numero1 = readline('Digite o primeiro numero: ');
$numero2 = readline('Digite o segundo numero: ');
echo PHP_EOL . 'Resultados' . PHP_EOL;
echo 'Soma: ' . $numero1 + $numero2 . PHP_EOL;
$sub = $numero1 - $numero2;
echo "Subtração: $sub " . PHP_EOL;
echo 'Multiplicação: '. $numero1 * $numero2 . PHP_EOL;
echo 'Divisão: ' . $numero1 / $numero2 . PHP_EOL;
echo 'Resto da divisão: ' .  $numero1 % $numero2 . PHP_EOL;
