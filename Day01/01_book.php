<?php
require_once('./src/book.php');
require_once('./src/ebook.php');

$book1 = new Book("Tytul", "Autor", 54.66, 54345654);
$book2 = new Book("Tytul2", "Autor2", 58.66, 54945654);

$book1->printBookInfo();
$book2->printBookInfo();



$book1 = new Ebook("Tytul", "Autor", 54.66, 54345654, 300);
$book1->printBookInfo();


?>