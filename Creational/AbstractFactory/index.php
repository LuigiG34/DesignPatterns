<?php

use App\Creational\AbstractFactory\Page\Page;
use App\Creational\AbstractFactory\PHPTemplateFactory;
use App\Creational\AbstractFactory\TwigTemplateFactory;

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


echo "Testing rendering with the Twig factory:\n"; echo $page->render(new TwigTemplateFactory());