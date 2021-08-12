<?php

namespace App\Controller;

use App\Repository\AlimentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlimentController extends AbstractController
{
    /**
     * @Route("/aliments", name="aliments")
     */
    public function aliments(AlimentRepository $alimentRepository): Response
    {

        $aliments = $alimentRepository->findAll();

        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments
        ]);
    }
}
