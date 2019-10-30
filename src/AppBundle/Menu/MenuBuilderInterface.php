<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

interface MenuBuilderInterface
{
    public function menu(FactoryInterface $factory, array $options) : ItemInterface;
    public function setItems(ItemInterface $menu) : void;
}
