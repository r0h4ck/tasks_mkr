<?php
class Autobus
{
    public $places, $prod_year;
    
    public $coutry = [1 => "Україна", 2 => "Китай", 3 => "Білорусь"];

}
class Depo
{
    
    public $autobuses = array(1, 2, 3);
    
}
$bmw = new Autobus();
$bmw -> places >= 0;
$bmw -> count(($bmw -> $counry = 1));

class TestCount extends \PHPUnit_Framework_TestCase
{
    public function TestCount() {
        $bmw -> count(($bmw -> $counry = 1));
    }
}
?>
