<?php

require_once ('./src/bookmark.php');
require_once ('./src/book.php');

$book1 = new Book("Wiedzmin", "Sepkowski", 45.23, 43243);

$bookMark1 = new bookmark(40, "Bookmark 1 for Wiedzmin");
$book1->addBookmark($bookMark1);


$bookMark2 = new bookmark(65, "Bookmark 2 for Wiedzmin");
$book1->addBookmark($bookMark2);

$book1->printBookInfo();

var_dump($book1);

$book2 = clone $book1;
$book2->setPrice(654.67);
var_dump($book2);

?>