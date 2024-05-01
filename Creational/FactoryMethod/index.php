<?php

use App\Creational\FactoryMethod\Poster\FacebookPoster;
use App\Creational\FactoryMethod\Poster\LinkedInPoster;
use App\Creational\FactoryMethod\Poster\SocialNetworkPoster;

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
}


echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));