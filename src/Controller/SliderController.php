<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SliderController extends AbstractController
{
    #[Route('/slider', name: 'app_slider')]
    public function index(): Response
    {

        return $this->render('slider/index.html.twig', [
            'controller_name' => 'SliderController',
        ]);
    }
}
