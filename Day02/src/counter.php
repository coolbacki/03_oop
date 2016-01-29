<?php

class Counter{
    static private $no = 0;

    private $x;
    private $y;

    public function __construct($x, $y)
    {
        Counter::$no++; // odwołanie do zmiennej statycznej konkretnej klasy
        $this->x = $x;
        $this->y = $y;
    }
    public function __destruct()
    {
        $this::$no--; // odwołanie do zmiennej statycznej tej (this) klasy
    }

    static public function GetNo(){
        return Counter::$no;
    }

}