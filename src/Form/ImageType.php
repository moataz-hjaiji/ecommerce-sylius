<?php

namespace App\Form;

use App\Entity\Image;
use Sylius\Bundle\CoreBundle\Form\Type\ImageType as BaseImageType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends BaseImageType
{
    public function __construct()
    {
        parent::__construct(Image::class, ['sylius']);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);

        $builder->add('title');
    }
    public function getBlockPrefix(): string
    {
        return 'sylius_image';
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
        ]);
    }
}
