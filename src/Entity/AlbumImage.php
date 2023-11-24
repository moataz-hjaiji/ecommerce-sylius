<?php

namespace App\Entity;

use App\Repository\AlbumImageRepository;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Image;

#[ORM\Entity(repositoryClass: AlbumImageRepository::class)]
class AlbumImage extends Image
{
}
