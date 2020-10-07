<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EnseigneController extends AbstractController
{
    /**
     * @Route("/enseigne", name="enseigne")
     */
    public function index()
    {
        return $this->render('enseigne/index.html.twig', [
            'controller_name' => 'EnseigneController',
        ]);
    }
}
