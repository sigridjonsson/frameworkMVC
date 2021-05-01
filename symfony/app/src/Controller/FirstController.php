<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class FirstController
{

    public function index()
    {
        return new Response('<html><body>Hello</body></html>');
    }
}
