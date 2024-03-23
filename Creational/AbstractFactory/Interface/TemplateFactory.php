<?php

namespace App\Creational\AbstractFactory\Interface;

/**
 * Cette interface déclare les méthodes de création pour chaque type de class
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}