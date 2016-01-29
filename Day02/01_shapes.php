<?php

require_once('./src/shape.php');
require_once('./src/circle.php');
require_once('./src/cone.php');
require_once('./src/cylinder.php');

$shape1 = new shape(3, 4, "niebieski");
$shape2 = new shape(6, 8, "czerwony");
$shape1->printInfo();
echo($shape1->distance($shape2));

$circle1 = new Circle (3, 4, "red", 5);
$circle2 = new Circle (6, 8, "blue", 2);
$circle1->printInfo();
echo ("Odleglosc miedzy srodkami kol = ".$circle1->distance($circle2)."<br><br>");
echo ("Pole kola = ".$circle1->getArea()."<br><br>");
echo ("Obwod kola = ".$circle1->getPir()."<br><br>");

$cone = new Cone(9, 12, "green", 5, 15);
$cone->printInfo();
echo ("Pole stozka = ".$cone->getArea()."<br><br>");
echo ("Objetosc stozka = ".$cone->getVol()."<br><br>");

$cylinder = new Cylinder(12, 16, "green", 10, 20);
$cylinder->printInfo();
echo ("Pole walca = ".$cylinder->getArea()."<br><br>");
echo ("Objetosc walca = ".$cylinder->getVol()."<br><br>");

?>