<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'BoboController',
        ]);
   /**
     * @Route("/public")
     */
   
    }
    public function cv()   {
 
        return $this->file("/public/assets/cv.pdf");
    }
}