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
            ->setLabel('test')
        ;
        $newSubmenu
            ->addChild('new-subitem')
            ->setLabel('Slider')
            ->setLabelAttribute('icon', 'star')
        ;
        $newSubmenu
            ->addChild('new-subitem-2')
            ->setLabel('Album')
            ->setLabelAttribute('icon', 'star')
        ;
        $newSubmenu
            ->addChild('new-subitem-3',['route'=>'app_admin_image_index'])
            ->setLabel('Image slider')
            ->setLabelAttribute('icon', 'picture')
        ;
    }
}
