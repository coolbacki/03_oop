<?php

class vector2d
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        echo("konstruktor Vector2d<br>");
        echo("dla x = $x <br>");
        echo("dla y = $y <br>");
        $this->setX($x);
        $this->setY($y);
    }

    public function __destruct()
    {
        echo("Vector2d usuniety<br>");
        echo("x = $this->x <br>");
        echo("y = $this->y <br>");
    }

    public function setX($x)
    {
        is_integer($x) === true ? $this->x = $x : $this->x = 0;
    }

    public function setY($y)
    {
        is_integer($y) === true ? $this->y = $y : $this->y = 0;
    }

    public function getLength()
    {
        return sqrt(pow($this->x), 2) + pow($this->y, 2);
    }

    public function addVector(vector2d $other) // do obiektu wrzucamy obiekt który jest mu znany (do siebie lub zaimplikowac zewnętrzny)
    {
        $this->x += $other->x;
        $this->y += $other->y;
    }

    public function multyply($num)
    {
        if (is_integer($num) || is_float($num)){

            $this->x *= $num;
            $this->y *= $num;

        }
    }
}

?>