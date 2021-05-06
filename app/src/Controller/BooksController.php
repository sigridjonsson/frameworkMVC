<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 */
class BooksController extends AbstractController
{
    /**
     * @Route("/books")
    */
    public function books()
    {
        require_once "../bin/bootstrap.php";

        $booksRepository = $entityManager->getRepository('\App\Entity\Books');
        $books = $booksRepository->findAll();

        return $this->render('books.html.twig', [
            'info' => "Böcker!",
            'books' => $books
        ]);
    }
}
