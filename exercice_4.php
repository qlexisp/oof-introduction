<?php

declare(strict_types=1);

class Beverage {
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is {$this->temperature}, {$this->color} and cost {$this->price} €.<br>";
    }

}

class Beer extends Beverage {
    protected $name;
    protected $alcoholPercentage;
    protected $alcoholUnit;

    public function __construct(string $name, float $alcoholPercentage, float $alcoholUnit, string $color, float $price, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->alcoholUnit = $alcoholUnit;
    }

    public function getAlcoholPercentage() {
        return "The alcohol percentage of this beverage is {$this->alcoholPercentage} %.<br>";
    }

    public function getAlcoholUnit() {
        return "The amount of alcohol unit for a {$this->name} is {$this->alcoholUnit}.<br>";
    }

    public function getColor() {
        return "Duvel is a {$this->color} beer.<br>";
    }

    public function getBeerInfo() {
        return "Hi i'm {$this->name} and i have an alcohol percentage of {$this->alcoholPercentage} and i have a {$this->color} color.";
    }

}

// Name, alcohol percentage, alcohol units, color, price //
$duvel = new Beer("Duvel", 8.5, 2.2, "light", 3.5);

echo $duvel->getAlcoholPercentage();

echo $duvel->getAlcoholUnit();

echo $duvel->getColor();

echo $duvel->getBeerInfo();

?>