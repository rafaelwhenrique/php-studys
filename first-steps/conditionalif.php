<?php

// (IF/ELSE) BÁSICÃO:

$userLogged = true;
if ($userLogged) {
    // echo "logado na página" . PHP_EOL;
} else {
    // echo "não logado na página" . PHP_EOL;
}

$user = "deazyst";
$password = "fodase123";
if ($user == "deazyst" && $password == "fodase123") {
    // echo "logado com sucesso meu nobre" . PHP_EOL;
} else {
    // echo "não logado na página" . PHP_EOL;
}

// (IF/ELSE IF/ ELSE):

$idade = 60;
if ($idade < 16) {
    // echo "Não eleitor" . PHP_EOL;
} else if ($idade == 16 || $idade == 17) {
    // echo "Eleitor Facultativo" . PHP_EOL;
} else if ($idade > 18 && $idade <= 70) {
    // echo "Eleitor obrigatório" . PHP_EOL;
}

$nota = 7.5;
if ($nota < 5) {
    // echo "Reprovado";
} else if ($nota >= 5 && $nota <= 6.9) {
    // echo "Recuperação";
} else if ($nota >= 7) {
    // echo "Aprovado";
} else {
    // echo "Sem nota";
}

$valor_compra = 500;
if ($valor_compra < 100) {
    // echo "Sem desconto" . PHP_EOL;
} else if ($valor_compra > 100 && $valor_compra <= 499) {
    // echo "Desconto de 10%". PHP_EOL;
} else if ($valor_compra >= 500) {
    // echo "Desconto de 15%" . PHP_EOL;
}

// switch case 
$deazyst = "@deazyst";

switch($deazyst){
    case "@rafaelwhenrique":
        echo "Link: https://github.com/rafaelwhenrique/php-studys" . PHP_EOL;
        echo "Da um like no repositório aí, po";
        break;
    case "@deazyst":
        echo "Link: https://www.instagram.com/deazyst/" . PHP_EOL;
        echo "Segue nos aí pae" . PHP_EOL;
        break;
    case "@promotion":
        echo "Link: https://soundcloud.com/yzy-kanye-tydolla/promotion" . PHP_EOL;
        echo "Belo gosto meu mano obteve o molho!";
        break;
    default:
        echo "Relaxa aí meu mano toma um café";
        break;
}

// Caso comando não existente

$password = "fasjudojioas";

switch($password){
    case "@rafaelwhenrique":
        echo "Link: https://github.com/rafaelwhenrique/php-studys" . PHP_EOL;
        echo "Da um like no repositório aí, po";
        break;
    case "@riprafael_":
        echo "Link: https://www.instagram.com/riprafael_/" . PHP_EOL;
        echo "Segue nos aí pae";
        break;
    case "@father":
        echo "Link: https://youtu.be/wuO4_P_8p-Q?si=zpPoV65vMEufBSnY" . PHP_EOL;
        echo "Belo gosto meu mano obteve o molho!";
        break;
    default:
        echo "Relaxa aí meu mano toma um café". PHP_EOL;
        break;
}

// Match = implementada desde a versão PHP 8.X
$command = "!r1prafael";
echo match ($command) {
    "!site" => "Link: https://www.instagram.com/riprafael_/". PHP_EOL,
    "!r1prafael", "!deazyst" => "@Segue nos aí pae". PHP_EOL,
    default => "nothing else matters"
};

echo match ("carne de panela!") {
    "!site" => "Link: https://www.receitasfodas.com/carnedepanela!pica/",
    "i_dont_know", "i_dont_know_2" => "I don't know, I don't know",
    default => "nada acontece, mas carne de panela é a melhor comida que tem" . PHP_EOL
};

