<?php

require '../oof-introduction/exercice_1.php';

class Beer extends Beverage 
{
    public $name;
    public $alcoholPercentage;

    public function __construct($name, $alcoholPercentage)
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getPercentage(){
        echo " And this $this->name has $this->alcoholPercentage";
    }
}

$getPercentage = new Beer("Duvel", 8.5);
$getPercentage->getPercentage();
?>