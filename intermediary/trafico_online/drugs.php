<?php 
require_once 'user.php';
class Drugs{
    private string $drug;
    private float $price;

    public function __construct(string $drug, float $price) 
    {
        $this->drug = $drug;
        $this->price = $price;
    }

    /**
     * Function getDrug()
     * @return string
    */

    public function getDrug(): string 
    {
        return $this->drug;
    }

    /**
     * Function getPrice()
     * @return float
    */
    public function getPrice(): float 
    {
        return $this->price;
    }
}