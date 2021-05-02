<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
class DicePlayController extends AbstractController
{
    /**
     * @Route("/TEST", name="TEST")
    */
    public function playGame()
    {
        return $this->render('layout.html.twig', [
            'info' => "DiceGame!",
        ]);
    }
}
