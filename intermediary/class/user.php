<?php
require_once 'drugs.php';
class User
{
    public string $username;
    private string $password;
    private float $money;

    public function __construct(string $username, string $password, float $money)
    {
        $this->username = $username;
        $this->password = $password;
        $this->money = $money;
    }

    public function canBuy(Drugs $drug): bool
    {
        return $this->getMoney() >= $drug->getPrice();
    }

    public function getMoney(): float
    {
        return $this->money;
    }

}
