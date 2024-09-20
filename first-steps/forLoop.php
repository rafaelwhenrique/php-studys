<?php
// FOR
echo "Quantas latinhas o nosso user_id precisa tomar para ficar legal? " . PHP_EOL;
$user_id = 7;
for ($i = 0; $i <= $user_id; $i++) {
    echo "latinha = $i, ";
}
echo "Caray, ó o user_id mijando na pia da cozinha!!" . PHP_EOL;

echo "Quantos baseado o Snoop Dog deve fumar para ficar legalzão?" . PHP_EOL;
$snoop_dog_beck_bolado = 10;
for ($baseado = 0; $baseado <= $snoop_dog_beck_bolado; $baseado++) {
    echo "baseado = $baseado, ";
}
echo "wait, i'm rolling another one" . PHP_EOL;

$multiplicador = 4;
for ($num = 0; $num <= 10; $num++) {
    echo "$multiplicador x $num = " . ($multiplicador * $num) . PHP_EOL;
}
$decremento = 0;
for ($i = 5; $i >= $decremento; $i--) {
    echo $i . "...";
}

// WHILE
echo PHP_EOL . "utilizando o while:" . PHP_EOL;
$soma = 3;
$i = 1;
$continue = true;
while ($continue) {
    echo $soma . " + " . $i . " = " . ($soma + $i) . PHP_EOL;
    if ($i == 10) {
        $continue = false;
    }
    $i++;
}
echo "finalizando a soma..." . PHP_EOL;

// foreach() sem índice
$nicknames = ["deazyst", "riprafael", "solizy", "greyrazors"];
foreach ($nicknames as $nick) {
    echo $nick . " ";
}

echo "" . PHP_EOL;

// com índice
foreach ($nicknames as $key => $nick) {
    echo $key . "." . $nick . " ";
}

echo "" . PHP_EOL;
$bob_marley_rolled = ["first blunt", "second blunt", "third blunt"];
foreach ($bob_marley_rolled as $key => $blunts) {
    echo $key . "." . $blunts . " ";
}

echo "" . PHP_EOL;

$user = new stdClass;
$user->name = "rafaelwhenrique";
$user->age = 21;
$user->github = "https://github.com/rafaelwhenrique";

foreach ($user as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}

//Controlando repetições - continue

for($numero = 0; $numero < 10; $numero++) {
    if($numero % 2 === 1) {
        continue;
    }
    echo $numero . " é par, ";
}

//loops infinitos, s=0 sai se acessar o bloco break
while(true){
    echo "entrou e ligou o carro, seu carro imediatamente: FALA MORENO, PARA ONDE VAMOS HOJE?"  . PHP_EOL;
    echo "1. Casa das prima" . PHP_EOL;
    echo "2. f1 com os mlk". PHP_EOL;
    echo "3. sinuca dale" . PHP_EOL;
    echo "0. SAIR" . PHP_EOL;
    
    // Nota: a função readline, é apenas uma maneira de coletar a informação vinda de um usuario. 
    $resposta = readline ('Digite uma opção entre 1,2,3,0: '); // digitei: 1
    
    if($resposta == '1') {
        echo 'OK MORENO, VAMOS PARA CASA DAS PRIMA' . PHP_EOL;
    } else if($resposta == '2') {
        echo 'Boa meu nobre, os de vdd eu sei quem são' . PHP_EOL;
    } else if ($resposta == '3') {
        echo 'sinuquinha valendo o boné' . PHP_EOL;;
    }else if($resposta == '0') {
        echo 'closing the program...' . PHP_EOL;
        break;
    }
}