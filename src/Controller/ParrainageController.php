<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParrainageController extends AbstractController
{
    /**
     * @Route("/parrainage", name="parrainage")
     */
    public function index()
    {
        return $this->render('parrainage/index.html.twig', [
            'controller_name' => 'ParrainageController',
        ]);
    }
}
