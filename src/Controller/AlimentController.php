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
            'aliments' => $aliments,
            'props' => false
        ]);
    }

    /**
     * @Route("/aliments/calories/{calories}", name="alimentsWithCalories")
     */
    public function alimentsWithCalories(AlimentRepository $alimentRepository, Int $calories): Response
    {

        $aliments = $alimentRepository->findByProps('calories', '<=', 50);
        $props = $calories . ' calories';

        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments,
            'props' => $props
        ]);
    }

    /**
     * @Route("/aliments/glucides/{glucides}", name="alimentsWithGlucides")
     */
    public function alimentsWithGlucides(AlimentRepository $alimentRepository, Int $glucides): Response
    {

        $aliments = $alimentRepository->findByProps('glucides', '<', 10);
        $props = $glucides . ' glucides';

        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments,
            'props' => $props
        ]);
    }
    
    /**
     * @Route("/aliments/proteines/{proteines}", name="alimentsWithProteines")
     */
    public function alimentsWithProteines(AlimentRepository $alimentRepository, Int $proteines): Response
    {

        $aliments = $alimentRepository->findByProps('proteines', '<', 1);
        $props = $proteines . ' proteines';

        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments,
            'props' => $props
        ]);
    }
}
