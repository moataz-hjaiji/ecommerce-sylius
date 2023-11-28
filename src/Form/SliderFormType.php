<?php

namespace App\Form;

use App\Entity\Image;
use App\Entity\Slider;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Sylius\Bundle\CoreBundle\Form\Type\ImageType as BaseImageType;

class SliderFormType extends BaseImageType
{

//    public function configureOptions(OptionsResolver $resolver): void
//    {
//        $resolver->setDefaults([
//            'data_class' => Slider::class,
//            'csrf_token' => false
//        ]);
//    }
    public function getBlockPrefix(): string
    {
        return 'app_admin_slider';
    }
}
