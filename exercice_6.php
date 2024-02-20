<?php

class Beverage 
{
    private $color;
    private $price;
    private $temperature;
    private $barname;

    public function __construct(string $color, float $price, string $temperature, string $barname)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->barname = $barname;
    }

    function getInfo()
    {
        echo "Our bar is called $this->barname.";
    }
}

$beverage = new Beverage("black", 2.0, "cold", "Het Vervolg");
$beverage->getInfo();

class Beer extends Beverage 
{
    private $name;
    private $alcoholPercentage;

    public function __construct($name, $alcoholPercentage, $color, $price, $temperature, $barname)
    {
        parent::__construct($color, $price, $temperature, $barname);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getBarname(){
        parent::getInfo();
    }
}

$getPercentage = new Beer("Duvel", 8.5, "blond", 3.5, "cold", "Het Vervolg");
$getPercentage->getBarname();
?>