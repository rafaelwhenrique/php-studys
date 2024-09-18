<?php
/*
    O interpretador sempre da preferência para os símbolos.
    (&&, and) as duas condições tem que ser true
*/ 

$workspace = 'Github';
$woking_on = 'Github';
var_dump($woking_on && $workspace);

// || - retorna true se uma condição for verdadeira ou ambos.
$on = true;
$off = true;
var_dump($on || $off);

/*
    (^, xor) retorna true se uma das condições for verdadeira, mas não ambos
*/ 
$cozinheiro = true;
$mise_en_place = true;
var_dump($cozinheiro ^ $mise_en_place);

// (!, not) 
$user_connected = false;
var_dump(!$user_connected); 