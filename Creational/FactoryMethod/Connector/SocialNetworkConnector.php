<?php

namespace App\Creational\FactoryMethod\Connector;

interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}