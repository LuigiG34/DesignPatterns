<?php

use App\Creational\Prototype\Prototype\Page;
use App\Creational\Prototype\Prototype\Author;

function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    $page->addComment("Nice tip, thanks!");

    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
    print_r($draft);
}

clientCode();