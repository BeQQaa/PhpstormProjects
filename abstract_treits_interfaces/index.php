<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//interface Human{
//    public function talk();
//    public function walk();
//}
//interface Mutant extends Human{
//    public function fly();
//}
//
//class Person implements Mutant {
//
//    public function talk()
//    {
//       echo "human talk<br>";
//        // TODO: Implement talk() method.
//    }
//
//    public function walk()
//    {
//        echo "walking<br>";
//        // TODO: Implement walk() method.
//    }
//
//    public function fly()
//    {
//        echo "flying<br>";
//        // TODO: Implement fly() method.
//    }
//}
//$bob = new Person();
//$bob->fly();
//$bob->talk();
//$bob->walk()
//********************************************
//
//trait PrintSome{
//    public function talk(){
//        echo "Hello World<br>";
//    }
//}
//class Test{
//    use PrintSome;
//}
//
//$obj = new Test();
//$obj->talk();
//
//$obj2 = new Test();
//$obj->talk();
////////////////////////////////////////////////////////

abstract  class Car{
    protected $speed;
    protected $color;

    abstract protected function showInfo();


    protected function printInfo(){
        echo "print <br>";
    }
}

class BMW extends Car{


    function __construct($speed)
    {
        $this->speed = $speed;
    }

    public function showInfo()
    {
        echo "about car";
        // TODO: Implement showInfo() method.
    }
}

$m3 = new BMW(240);
$m3->showInfo();

?>
</body>
</html>