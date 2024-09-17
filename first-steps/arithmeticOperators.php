<?php
// Sou livre cara, posso fazer qualquer expressão aritmética que eu quiser em php.
$itemA = 10;
$itemB = 20;
$ItemC = $itemA + $itemB;
echo ($ItemC + 30) / 2 . PHP_EOL;

$num1 = 25; //variável num igual a 25 positivo
$num2 = -$num1; //variável num2 vai ser igual ao oposto de num(25), ou seja, 25 negativo

echo $num1 . PHP_EOL;
echo $num2 . PHP_EOL;

$x = 10;
$y = 2;

$exponencial = $x ** $y; //mesma coisa que 10x10 = 100

echo $exponencial . PHP_EOL;

$colors = ['red ', 'green ', 'blue '];
for ($i = 0; $i < 9; $i++) {
    echo 'ALTERNANDO CORES = ' . $colors[$i % 3] . PHP_EOL;
}