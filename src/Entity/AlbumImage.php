<?php

namespace App\Entity;

use App\Repository\AlbumImageRepository;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Image;
use Sylius\Component\Resource\Model\ResourceInterface;

#[ORM\Entity(repositoryClass: AlbumImageRepository::class)]
class AlbumImage extends Image implements ResourceInterface
{
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }
}
