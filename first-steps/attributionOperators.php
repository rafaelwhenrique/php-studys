<?php
$itemA = 50;
$itemA += 25;
echo $itemA . ' = mesmo que 50 + 25 = 75' . PHP_EOL;
$itemA -= 25;
echo $itemA .' = mesmo que  50 - 25 = 50' . PHP_EOL;
$itemB = 5;
$itemA /= $itemB;
echo $itemA . ' = mesmo que  50 / 5 = 10' . PHP_EOL;

echo ($itemA *= $itemB) . ' mesmo que 10 * 5 = 50' . PHP_EOL;