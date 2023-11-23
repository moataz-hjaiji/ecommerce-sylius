<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('new')
            ->setLabel('Slider')
        ;

        $newSubmenu
            ->addChild('new-subitem',['route'=>'app_admin_slider_index'])
            ->setLabel('Slider')
            ->setLabelAttribute('icon', 'star')
        ;
        $newSubmenu
            ->addChild('new-subitemd',['route'=>'app_admin_image_index'])
            ->setLabel('Image')
            ->setLabelAttribute('icon', 'picture')
        ;
    }
}
