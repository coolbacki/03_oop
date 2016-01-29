<?php
require_once('./src/vector2d.php');

$vector1 = new vector2d(3, 4);
$vector2 = new vector2d(6, 8);

var_dump($vector1);
var_dump($vector2);

echo("dlugosc vect1 = ". $vector1->getLength()."<br>");
echo("dlugosc vect2 = ". $vector2->getLength()."<br>");

$vector2->multyply(4);
$vector1->addVector($vector2);


?>