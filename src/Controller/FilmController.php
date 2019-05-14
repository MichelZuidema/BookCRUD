<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilmController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('views/index.html.twig', [
           'number' => $number,
        ]);
    }
}