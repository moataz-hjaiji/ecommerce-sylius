<?php

namespace App\Controller;
use App\Repository\ImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImageController extends AbstractController
{
    public function getImages(ImageRepository $imageRepository)
    {
        return $this->render('images/index.html.twig',[
            'images' => $imageRepository->findAll()
        ]);
    }
}
