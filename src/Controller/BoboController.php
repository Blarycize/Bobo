<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoboController extends AbstractController
{
    /**
     * @Route("/bobo", name="bobo")
     */
    public function index(): Response
    {
        return $this->render('bobo/index.html.twig', [
            'controller_name' => 'BoboController',
        ]);
    }
    /**
     * @Route("/pages", name="Mes_loisirs")
     */
    public function loisirs(): Response
    {
        return $this->render('pages/loisirs.html.twig', [
            'controller_name' => 'BoboController',
        ]);
    }
}
