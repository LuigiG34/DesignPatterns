<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interface\PageTemplate;
use App\Creational\AbstractFactory\Interface\TemplateFactory;
use App\Creational\AbstractFactory\Interface\TemplateRenderer;
use App\Creational\AbstractFactory\Interface\TitleTemplate;
use App\Creational\AbstractFactory\PHP\PHPTemplatePageTemplate;
use App\Creational\AbstractFactory\PHP\PHPTemplateRenderer;
use App\Creational\AbstractFactory\PHP\PHPTemplateTitleTemplate;

/**
 * Chacune des Factory correspond à une variante spécifique de chaque type de templates dans ce contexte
 * 
 * Cette Factory créer des templates PHP.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}