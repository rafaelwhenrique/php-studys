<?php
require_once 'drugs.php';
require_once 'user.php';

$prensado = new Drugs("prensado do Ney", 20);
$lolo = new Drugs("Lança Perfume", 5);
$dry = new Drugs("Dry", 100);
$riprafael = new User("riprafael", "secret12022003", 50);

echo "Nome do usuário: " . $riprafael->username . PHP_EOL;
echo "Balance: " . $riprafael->getMoney() . PHP_EOL;

if ($riprafael->canBuy($dry)) {
    echo $riprafael->username . ", pode comprar o " . $dry->getDrug() . "sim!" . PHP_EOL;
} else {
    echo $riprafael->username . ", Ta liso em pae, você não pode comprar o " . $dry->getDrug() . " não!" . PHP_EOL;
}

if ($riprafael->canBuy($prensado)) {
    echo $riprafael->username . ', você pode comprar o ' . $prensado->getDrug() . '!' . PHP_EOL;
} else {
    echo $riprafael->username . ', caraio tiozão, com isso daí só da pra comprar o ' . $lolo->getDrug() . ' num fode né!' . PHP_EOL;
}

unset($riprafael);