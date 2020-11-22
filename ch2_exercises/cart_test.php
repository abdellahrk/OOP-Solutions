<?php
require_once '../ch2/Book.php';
require_once '../ch2/ShoppingCart.php';
require_once '../ch2/Dvd.php';

$book = new Book('Alice\'s adventure in wonderland', 500);
$dvd = new Dvd('Atonement', ' 2 hr 10 mins');

$cart = new ShoppingCart();

$cart->addItem($book);

$cart->addItem($dvd);