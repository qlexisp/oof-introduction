<?php

class Beverage 
{
    public $color;
    public $price;
    public $temperature;

    public function __construct($temperature, $price, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
        $this->price = $price;
    }

    function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color.";
    }
}

$beverage = new Beverage(2, "black", "cold");
$beverage->getInfo();

?>