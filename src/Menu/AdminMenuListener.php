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
            ->addChild('new-subitem',['route'=>'app_admin_slider_index'])
            ->setLabel('Slider')
            ->setLabelAttribute('icon', 'star')
        ;
        $newSubmenu
            ->addChild('new-subitem-2',['route'=>'app_admin_album_index'])
            ->setLabel('Album')
            ->setLabelAttribute('icon', 'star')
        ;
//        $newSubmenu
//            ->addChild('sub-image',['route'=>'app_admin_album.image_index'])
//            ->setLabel('Image slider')
//            ->setLabelAttribute('icon', 'picture')
//        ;
    }
}
