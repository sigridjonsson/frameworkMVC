<?php

use Mos\Books\Books;

require_once __DIR__ . "/bootstrap.php";

if ($argc !== 5) {
    echo "Usage ${argv[0]} <title> <isbn> <author> <picture>\n";
    exit(1);
}

$newBookTitle = $argv[1];
$newBookISBN = $argv[2];
$newBookAuthor = $argv[3];
$newBookPicture = $argv[4];

$books = new Books();
$books->setTitle($newBookTitle);
$books->setISBN($newBookISBN);
$books->setAuthor($newBookAuthor);
$books->setPicture($newBookPicture);

$entityManager->persist($books);
$entityManager->flush();

echo "Created Book with ID " . $books->getId() . "\n";
