<?php

namespace App\Creational\AbstractFactory\Page;

use App\Creational\AbstractFactory\Interface\PageTemplate;
use App\Creational\AbstractFactory\Interface\TitleTemplate;

abstract class BasePageTemplate implements PageTemplate
{
    protected $titleTemplate;

    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}