<?php

namespace AppBundle\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;


class MaterialIconsExtension extends AbstractExtension
{
    /**
     * @return  array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('icon', [$this, 'icon'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param   string  $icon
     * @param   string  $class
     * @param   string  $style
     *
     * @return  string
     */
    public function icon(string $icon, string $class = '', string $style = ''): string
    {
        return sprintf("<i class='material-icons %s' style='%s'>%s</i>", $class, $style, $icon);
    }
}
