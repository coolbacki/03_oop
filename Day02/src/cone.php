<?php

class Cone extends Circle
{
    protected $h;
    public function __construct($x, $y, $color, $r, $h)
    {
        parent::__construct($x, $y, $color, $r);
        echo("Kostructor CONE<br>");
        $this->setH($h);
        echo("h = $this->h <br>");

    }

    public function __destruct()
    {
        echo("Destruktor CONE<br>");
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
        echo("Print CONE:<br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
        echo("Kolor = $this->color <br>");
        echo("promien = $this->r <br>");
        echo("Wysokosc = $this->h <br><br>");
    }

    public function getArea()
    {
        $pp = (parent::getArea());
        $pb = M_PI * $this->r * (sqrt(pow($this->r, 2) + pow($this->h, 2)));
        return ($pp + $pb);

    }

    public function getVol()
    {
        $vol = parent::getArea() * (1 / 3) *$this->h;
        return $vol;
    }
}