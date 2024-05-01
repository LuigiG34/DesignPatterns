<?php

namespace App\Creational\FactoryMethod\Poster;

use App\Creational\FactoryMethod\Connector\FacebookConnector;
use App\Creational\FactoryMethod\Connector\SocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}