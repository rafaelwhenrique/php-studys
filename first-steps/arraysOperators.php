<?php
$user = [
    'name' => 'Rafael',
    'age' => 21,
    'learning' => 'PHP/Laravel'
];

$github = [
    'profile' => 'https://github.com/rafaelwhenrique',
    'working_on' => 'php-studys'
];
// + UNIÃO
$merge = $user + $github;
print_r($merge);

// == Igualdade
$arr01 = [0 => 'zero'];
$arr02 = [0 => 'zero'];
print_r(($arr01 == $arr02) . PHP_EOL);

// != diferença ou <>
$arr01 = [1 => 'um'];
$arr02 = [2 => 'dois'];
print_r(($arr01 != $arr02) . PHP_EOL); 
print_r(($arr01 <> $arr02) . PHP_EOL);

