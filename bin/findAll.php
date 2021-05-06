<?php

require_once __DIR__ . "/bootstrap.php";

$booksRepository = $entityManager->getRepository('\Mos\Books\Books');
$books = $booksRepository->findAll();

echo "All books\n--------------------\n";

if ($books) {
    foreach ($books as $book) {
        echo sprintf("%2d - %s (%d)\n",
            $book->getId(),
            $book->getTitle(),
            $book->getISBN(),
            $book->getAuthor(),
            $book->getPicture()
        );
    }
} else {
    echo " (empty)\n";
}
