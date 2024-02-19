<?php

class Beverage 
{
    public $color;
    public $price;
    public $temperature;

    public function __construct($color, $price, $temperature)
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

$beverage = new Beverage("Cola", 2, "black");
$beverage->getInfo();

?>