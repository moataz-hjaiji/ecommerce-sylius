<?php

namespace App\Controller;

use App\Entity\Image;
use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class ImagesController extends ResourceController
{
    #[Route('/images/{id}', name: 'app_admin_image_show')]
    public function index(Image $image): Response
    {

        return $this->render('images/index.html.twig', [
            'image' => $image,
        ]);
    }
}
