<?php
$greet = 'Hello';
$name_phrase = "My name's: ";
$age_phrase = "My age's: ";
$name = 'Rafael';
$github = 'github.io/rafaelwhenrique';
$age = 21;
$continuity = ' and ';
// echo $greet . ", " . $name_phrase . $name . $continuity . $age_phrase . $age . PHP_EOL . $github;

$data = [
    'name' => 'Rafael',
    'age' => '21',
    'city' => 'Federal District',
    'course' => 'PHP4NOOBS by danielhe4rt',
    'github' => 'github.io/rafaelwhenrique'
];

echo $data['name'] . PHP_EOL . $data['course']. PHP_EOL;

// Constantes

define('git', 'https://github.com/rafaelwhenrique');
echo git;