<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MagasinbioController extends AbstractController
{
    /**
     * @Route("/magasinBio", name="magasinbio")
     */
    public function index(EntrepriseRepository $entrepriseRepository): Response
    {
        return $this->render('magasinbio/index.html.twig', [
            'controller_name' => 'MagasinbioController',
            'entreprises' => $entrepriseRepository->findAll(),
        ]);
    }
}
