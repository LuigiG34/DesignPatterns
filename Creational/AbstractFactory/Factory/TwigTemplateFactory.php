<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interface\PageTemplate;
use App\Creational\AbstractFactory\Interface\TemplateFactory;
use App\Creational\AbstractFactory\Interface\TemplateRenderer;
use App\Creational\AbstractFactory\Interface\TitleTemplate;
use App\Creational\AbstractFactory\Twig\TwigPageTemplate;
use App\Creational\AbstractFactory\Twig\TwigTitleTemplate;
use App\Creational\AbstractFactory\Twig\TwigRenderer;

/**
 * Chacune des Factory correspond à une variante spécifique de chaque type de templates dans ce contexte
 * 
 * Cette Factory créer des templates Twig.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}