<?php

namespace App\Creational\AbstractFactory\Twig;

use App\Creational\AbstractFactory\Interface\TitleTemplate;

class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}