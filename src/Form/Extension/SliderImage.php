<?php

namespace App\Form\Extension;

use App\Form\ImageType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SliderImage extends \Symfony\Component\Form\AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'app.ui.title',
                'required' => false
            ])
        ;
    }

    /**
     * @inheritDoc
     */
    public static function getExtendedTypes(): iterable
    {
        return [ImageType::class];
    }
}
