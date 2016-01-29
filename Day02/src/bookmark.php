<?php

class bookmark{
    private $page;
    private $desc;

    public function __construct($page, $desc)
    {
        $this->setPage($page);
        $this->setDesc($desc);
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
    }
    public function showInfo(){
        echo("Zakladka na stronie $this->page z opisem $this->desc <br>");
    }

}

