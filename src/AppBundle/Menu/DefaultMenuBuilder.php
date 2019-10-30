<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class DefaultMenuBuilder implements ContainerAwareInterface, MenuBuilderInterface
{
    use ContainerAwareTrait;

    /**
     * @param FactoryInterface  $factory
     * @param array             $options
     *
     * @return ItemInterface
     */
    public function menu(FactoryInterface $factory, array $options) : ItemInterface
    {
        $menu = $factory
            ->createItem('root')
            ->setChildrenAttribute('class', 'nav')
        ;

        $this->setItems($menu);

        return $menu;
    }

    /**
     * @param ItemInterface     $menu
     */
    public function setItems(ItemInterface $menu) : void
    {
        $menu
            ->addChild('Football', ['route' => 'football'])
            ->setAttribute('icon', 'sports_soccer')
            ->setAttribute('class', 'nav-item')
            ->setLinkAttribute('class', 'nav-link')
        ;

        $menu
            ->addChild('Basketball', ['route' => 'basketball'])
            ->setAttribute('icon', 'sports_basketball')
            ->setAttribute('class', 'nav-item')
            ->setLinkAttribute('class', 'nav-link')
        ;
    }
}
