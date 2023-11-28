<?php

namespace App\Entity;

interface ImageInterface extends \Sylius\Component\Core\Model\ImageInterface
{
    public function getId(): ?int;

    public function getTitle(): ?string;

    public function setTitle(string $title): static;

    public function getDescription(): ?string;

    public function setDescription(string $description): static;
}
