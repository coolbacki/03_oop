<?php

class Cylinder extends Circle
{
    protected $h;

    public function __construct($x, $y, $color, $r, $h)
    {
        parent::__construct($x, $y, $color, $r);
        echo("Kostructor CYLINDER<br>");
        $this->setH($h);
        echo("h = $this->h <br>");

    }

    public function __destruct()
    {
        echo("Destruktor CYLINDER<br>");
        parent::__destruct();
        echo("h = $this->h <br>");

    }

    public function setH($h)
    {
        $this->h = $h;
    }

    public function getH()
    {
        return $this->h;
    }

    public function printInfo()
    {
        echo("Print CYLINDER:<br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
        echo("Kolor = $this->color <br>");
        echo("promien = $this->r <br>");
        echo("Wysokosc = $this->h <br><br>");
    }

    public function getArea()
    {
        $pp = parent::getArea() * 2;
        $pb = parent::getPir() * $this->h;
        return ($pp + $pb);

    }

    public function getVol()
    {
        $vol = parent::getArea() * $this->h;
        return $vol;
    }
}