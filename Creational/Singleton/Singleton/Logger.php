<?php

namespace App\Creational\Singleton\Singleton;

class Logger extends Singleton
{
    private $fileHandle;

    protected function __construct()
    {
        // On ouvre la console au lieu d'un fichier pour l'exemple
        $this->fileHandle = fopen('php://stdout', 'w');
    }

    public function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "$date: $message\n");
    }

    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}