<?php
class Toys{
    var $wheels=98;
    static $type="move";
    public $color="pink";//Can be used anywhere;same as var
    protected $price=1200;//Can only be used inside the class or inside sub classes
    private $pack="weak";//Can only be used inside this class, not even in sub classes
// function __construct()//Constructor executes everytime an object of class is created
// {
//     echo "It's a constructer";
// }
static function number()
{
    // $this->wheels=$this->wheels+10;
    echo "I'm a static method";
}
function update()
{
    echo $this->pack;
}
}
class Edu extends Toys{
    //Can override properties and methods of its parent
    function update()
{
    echo $this->price+20;
}
}
// Instantiating the class
$obj1=new Toys();
$obj2=new Toys();
Toys::number();
// echo $obj1->wheels."<br>";
// echo $obj2->wheels=409;
// echo $obj1->color;
// echo Toys::$type;
// $obj1->update();
$eduobj=new Edu();
// $eduobj->update();
// echo $eduobj->wheels;
// if(class_exists('toys'))
// {
//     echo "Yoooo You go bitch";
// }
// else{
//     echo "Nayyy";
// }
// if(method_exists('toys','number'))
// {
//     echo "Yoooo You go bitch";
// }
// else{
//     echo "Nayyy";
// }
?>