<?php

namespace App\Creational\AbstractFactory\PHP;

use App\Creational\AbstractFactory\Interface\TitleTemplate;

class PHPTemplateTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}