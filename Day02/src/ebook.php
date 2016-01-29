<?php

class Ebook extends Book{
    protected $size;

    public function __construct($name, $author, $price, $catalogNumber, $size)
    {
        parent::__construct($name, $author, $price, $catalogNumber);
        $this->setSize($size);
    }
    public function __destruct()
    {
        parent::__destruct();
    }

    public function setName($name)
    {
        parent::setName($name." - wersja cyfrowa");
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function printBookInfo()
    {
        echo ("Print Ebook");
        parent::printBookInfo();
        echo($this->size);
    }
}


?>

