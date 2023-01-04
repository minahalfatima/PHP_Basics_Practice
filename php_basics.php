<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$name="Minahal";
$number=200;
echo $name . " ". $number;//PHP is case sensitive
$name="<h1>Hello</h1>";//variables can be assigned with HTML Tags
echo $name;
echo 35+98;
echo "<br>";
echo 35-98;
echo "<br>";
echo 35*98;
echo "<br>";
echo 35/98;
echo "<br>";
$numberList=array(23,76,87,45,98,"<h1>NumberList</h1>");
// print_r($numberList);
echo $numberList[5];
// $numberList=[];
// Associative Arrays
$assoc=array("one"=>12,"two"=>34);
print_r($assoc);
echo $assoc["two"].$assoc["one"]."<br>";
if($numberList[0]<$numberList[1])
{
    echo "Hello";
}
elseif($numberList[1]<$numberList[2])
{
    echo "Heyyy";
}
else
{
    echo "Bye";
}
if (4!='4') //equal operator == & identical operator === & not equal != & not identical !==
{
    echo "Equal";
}
if (6<>7)
{
    echo "<> operator in function"; // < > <= >= operators
}
if (0||1) // Logical operators &&, ||, and !
{
    echo "These are logical operators";
}
// Switch Statement
switch(45)
{
    case 1:
        echo "This is 1 of Switch statement speaking";
        break;
    case 0:
        echo "This is 0 of Switch statement speaking";
        break;
    default:
    echo "None of cases are true";
}
// Loops
// While Loop
while($number<205){
    echo "<br>"."I have Gone Insane";
    ++$number;
}
// For Loop
for ($i=0;$i<10;++$i)
{
    echo "<br> I'm the for loop Speaking";
}
// For each Loop
foreach($assoc as $t=>$x)
{
    echo "<br>".$t;
}
//Custom Functions
function eat()
{
    echo "I'm gonna make fried naan";
}
function learn()
{
    echo "<br>I'm learning PHP and later I'll make something for myself to eat<br>";
    eat();
}
learn();
//parameters
function square($a)
{
    echo "<br>The Square of ".$a." is ".$a**2;
}
square(56);
function greet($g)
{
    // echo $number;
    echo "<br>".$g."<br>";
}
greet("Hello I am a customer");
//Return Values 
function add($n1,$n2)
{
    return $n1+$n2;
}
$n=add(34,67);
echo "The Function Returned ".$n."<br>";
$n=add($n,1);
echo "The Function Returned ".$n."<br>";
// Global Variables
function g1()
{
    global $number;
    $number=45;
}
echo "Number Before ".$number."<br>";
g1();
echo "Number After ".$number;
// Constants
define("name","Minahal");
echo "<br> I'm a constant ".name;
define("animals",["cat","dog","pig"]);
echo "<br>I'm element of a constant Array ".animals[1];
// Built in Functions
// maths
echo "<br>".pow(6,2)."<br>";
echo rand(2,45)."<br>";
echo sqrt(2)."<br>";
echo ceil(6.2)."<br>";
echo floor(6.2)."<br>";
echo round(6.2)."<br>";
//string
$string="I'm Minahal!!";
echo "String Functions<br>".strlen($string)."<br>";
echo strtoupper($string)."<br>";
echo strtolower($string)."<br>";
// Array Functions
$list=[45,78,465,34,345];
echo "Array Functions <br>".max($list)."<br>";
echo min($list)."<br>";
print_r($list);
sort($list);
print_r($list);
?>
</body>
</html>