<?php

class Beverage 
{
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color.";
    }
}

$beverage = new Beverage("black", 2.0, "cold");
$beverage->getInfo();

?>