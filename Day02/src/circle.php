<?php

class Circle extends shape
{
    protected $r;
    public function __construct($x, $y, $color, $r)
    {
        parent::__construct($x, $y, $color);
        echo("Kostructor CIRCLE<br>");
        $this->setR($r);
        echo("r = $this->r <br>");

    }
    public function __destruct()
    {
        echo("Destruktor CIRCLE<br>");
        parent::__destruct();
        echo("r = $this->r <br>");
    }

    public function setR($r)
    {
        $this->r = $r;
    }

    public function getR()
    {
        return $this->r;
    }

    public function printInfo()
    {
        echo("Pring CIRCLE:<br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
        echo("Kolor = $this->color <br>");
        echo("promien = $this->r <br><br>");
    }

    public function getArea()
    {
        $area = M_PI * pow($this->r, 2);
        return $area;
    }

    public function getPir()
    {
        $pir = 2 * M_PI * $this->r;
        return $pir;
    }
}