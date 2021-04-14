<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
class Car{
    protected $speed;
    protected $wheels;
    protected $color;

    function __construct($speed, $color)
    {
        $this->speed = $speed;
        $this->color = $color;
    }

    function showSpeed(){
        echo "Speed of car is : " .$this->speed . '<br>';
    }
}

class BMV extends Car{
    private $model;

    function __construct($speed, $color, $model)
    {
        parent::__construct($speed, $color);
        $this->model = $model;
    }

    function getModel(){
        echo "Model is: " . $this->model . '<br>';
    }
    function getColor(){
        echo "Color is: " . $this-> color . '<br>';
    }

}

class Audi extends Car {}

$m3 = new BMV(340, "white", "M3");
$m3->showSpeed();
$m3->getModel();
$m3->getColor();
$x5 = new BMV(270,"red", "X5");
$x5->showSpeed();
$x5->getModel();
$x5->getColor();
?>
</body>
</html>