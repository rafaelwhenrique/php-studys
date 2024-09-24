<?php
class Car 
{
    private string $model;
    private string $color;
    private string $motor_type;
    private int $year;

    public function __construct(string $model, string $color, string $motor_type, int $year) 
    {
        $this->model = $model;
        $this->color = $color;
        $this->motor_type = $motor_type;
        $this->year = $year;
    }

    public function getModel():string 
    {
        return $this->model;
    }

    public function getColor():string
    {
        return $this->color;
    }
    public function getMotor(): string
    {
        return $this->motor_type;
    }

    public function getYear(): int
    {
        return $this->year;
    }
 
}

class Tesla extends Car 
{
    private $autopilot;

    public function __construct(string $model, string $color, string $motor_type, int $year, $autopilot) 
    {
        parent::__construct($model, $color, $motor_type, $year);
        $this->autopilot = $autopilot;
    }

    public function getAutoPilot():string 
    {
        return $this->autopilot;
    }

    public function activeAutoPilot():bool
    {
        if ($this->getAutoPilot()){
            return true;
        } else {
            return false;
        }
    }
}

$corsa = new Car('6 Generation - Opel Corsa', 'white', 'transversal', 2001);
echo $corsa->getModel() . PHP_EOL;
$roadster = new Tesla("Tesla Roadster", "red", "eletric", 2012, true);
echo $roadster->activeAutoPilot(); // 1


