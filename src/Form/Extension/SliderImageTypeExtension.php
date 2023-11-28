<?php

namespace App\Form\Extension;

use App\Form\ImageType;
use App\Form\SliderFormType;
use Sonata\Form\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

class SliderImageTypeExtension
{

//    public function buildForm(FormBuilderInterface $builder, array $options): void
//    {
//        $builder->add('images', CollectionType::class, [
//            'entry_type' => ImageType::class,
////            'allow_add' => true,
////            'allow_delete' => true,
//            'by_reference' => false,
//            'label' => 'sylius.form.shipping_method.images',
//        ]);
//    }
    /**
     * @inheritDoc
     */
//    public static function getExtendedTypes(): iterable
//    {
//        return [SliderFormType::class];
//    }
    public function getBlockPrefix(): string
    {
        return 'app_admin_slider';
    }
}
