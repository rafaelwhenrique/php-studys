<?php

// (IF/ELSE) BÁSICÃO:

$userLogged = true;
if ($userLogged) {
    echo "logado na página" . PHP_EOL;
} else {
    echo "não logado na página" . PHP_EOL;
}

$user = "deazyst";
$password = "fodase123";
if ($user == "deazyst" && $password == "fodase123") {
    echo "logado com sucesso meu nobre" . PHP_EOL;
} else {
    echo "não logado na página" . PHP_EOL;
}

// (IF/ELSE IF/ ELSE):

$idade = 60;
if ($idade < 16) {
    echo "Não eleitor" . PHP_EOL;
} else if ($idade == 16 || $idade == 17) {
    echo "Eleitor Facultativo" . PHP_EOL;
} else if ($idade > 18 && $idade <= 70) {
    echo "Eleitor obrigatório" . PHP_EOL;
}

$nota = 7.5;
if ($nota < 5) {
    echo "Reprovado";
} else if ($nota >= 5 && $nota <= 6.9) {
    echo "Recuperação";
} else if ($nota >= 7) {
    echo "Aprovado";
} else {
    echo "Sem nota";
}

$valor_compra = 500;
if ($valor_compra < 100) {
    echo "Sem desconto" . PHP_EOL;
} else if ($valor_compra > 100 && $valor_compra <= 499) {
    echo "Desconto de 10%". PHP_EOL;
} else if ($valor_compra >= 500) {
    echo "Desconto de 15%" . PHP_EOL;
}