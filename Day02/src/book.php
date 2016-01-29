<?php

class Book
{
    protected $name;
    protected $author;
    protected $price;
    protected $catalogNumber;
    protected $bookmarks;


    public function __construct($name, $author, $price, $catalogNumber, $bookmarks)
    {
        $this->setName($name);
        $this->setAuthor($author);
        $this->setPrice($price);
        $this->setCatalogNumber($catalogNumber);
        $this->bookmarks = [];
        echo("Konstruktor BOOK");
    }
    public function __destruct()
    {
        echo("Destruktor BOOK");
     }

    public function setName($name)
    {
        is_string($name) === true ? $this->name = $name : "";
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setCatalogNumber($catalogNumber)
    {
        $this->catalogNumber = $catalogNumber;
    }

    public function printBookInfo()
    {
        echo("<br>");
        echo("tytul: <b>$this->name</b><br>");
        echo("cena: $this->price<br>");
        echo("autor: $this->author<br>");
        echo("nr katalogowy: $this->catalogNumber<br>");

        foreach ($this->bookmarks as $mark){
            $mark->showInfo();
        }
    }

    public function addBookmark(Bookmark $bookmark){
        $this->bookmarks[] = $bookmark;
    }

    public function __clone()
    {
        echo ("Clone BOOK");
        $temp = [];
        foreach($this->bookmarks as $bMark){
            $temp [] = clone $bMark;
        }
        $this->bookmarks = $temp;

    }
}

