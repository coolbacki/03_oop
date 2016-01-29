<?php

class shape
{
    protected $x;
    protected $y;
    protected $color;

    public function __construct($x, $y, $color)
    {

        $this->setX($x);
        $this->setY($y);
        $this->setColor($color);

        echo("Konstruktor SHAPE<br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
        echo("Kolor = $this->color <br><br>");
    }

    public function __destruct()
    {
        echo("Destructor SHAPE<br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
        echo("kolor = $this->color <br>");
    }

    public function setX($x)
    {
        is_integer($x) === true ? $this->x = $x : $this->x = 0;
    }

    public function setY($y)
    {
        is_integer($y) === true ? $this->y = $y : $this->y = 0;
    }

    public function setColor($color)
    {
        is_string($color) === true ? $this->color = $color : $this->color = "domyslny";
    }

    public function printInfo()
    {
        echo("<b>Pring SHAPE:</b><br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
        echo("Kolor = $this->color <br><br>");
    }

    public function distance(shape $other)
    {
        $x2 = $this->x - $other->x;
        $y2 = $this->y - $other->y;
        $distance = sqrt(pow($x2, 2) + pow($y2, 2));
        return $distance;
    }
}

?>