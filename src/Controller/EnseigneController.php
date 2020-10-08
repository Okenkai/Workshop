<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnseigneController extends AbstractController
{
    /**
     * @Route("/enseigne", name="enseigne")
     */
    public function index(EntrepriseRepository $entrepriseRepository): Response
    {
        return $this->render('enseigne/index.html.twig', [
            'controller_name' => 'EnseigneController',
            'entreprises' => $entrepriseRepository->findAll(),
        ]);
    }
}
