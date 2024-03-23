<?php

namespace App\Creational\AbstractFactory\Interface;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}