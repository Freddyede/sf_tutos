<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\{
    Routing\Annotation\Route,
    HttpFoundation\Response
};

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'users' => ["Franck", "Hugo", "Sandrine", "Fred", "Noélya"],
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
}
