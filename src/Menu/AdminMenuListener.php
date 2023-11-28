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
            ->addChild('new-subitem-3',['route'=>'app_admin_image_index'])
            ->setLabel('Slider')
            ->setLabelAttribute('icon', 'picture')
        ;
    }
}
