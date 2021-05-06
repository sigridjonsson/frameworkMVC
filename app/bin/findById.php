<?php

require_once __DIR__ . "/bootstrap.php";

if ($argc !== 2) {
    echo "Usage ${argv[0]} <id>\n";
    exit(1);
}

$id = $argv[1];
$books = $entityManager->find('\App\Entity\Books', $id);

if ($books === null) {
    echo "No book found.\n";
    exit(1);
}

echo sprintf("%2d - %s (%d)\n",
    $books->getId(),
    $books->getTitle(),
    $books->getISBN(),
    $books->getAuthor(),
    $books->getPicture()
);
