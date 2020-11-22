<?php
require_once '../ch2/Book.php';
require_once '../ch2/Dvd.php';

$book = new Book('The Dilemma of a Nun', 300);
$dvd = new DVD('Atonement', 50);

$book->setManufacturerName('friends of ED');

$book->display();

$book2 = clone $book;
$book2->setTitle('Book 2 title');
$book2->setManufacturerName('Book 2 manufacturer');
$book2->display();


$dvd->display();

echo get_class($book) . '<br>';
echo get_parent_class($book) . '<br>';

echo $book->__toString();

