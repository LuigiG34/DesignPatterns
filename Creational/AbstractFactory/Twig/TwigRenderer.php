<?php

namespace App\Creational\AbstractFactory\Twig;

use App\Creational\AbstractFactory\Interface\TemplateRenderer;

class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}