<?php

namespace LuigiG34\Behavioral;

class CsvIterator implements \Iterator
{
    const ROW_SIZE = 4096;

    /**
     * Pointeur vers le fichier CSV
     * @var resource
     */
    protected $filePointer = null;

    /**
     * Ligne courante
     * @var array
     */
    protected $currentElement = null;

    /**
     * Compteur de ligne
     * @var int
     */
    protected $rowCounter = null;

    /**
     * Délimiteur CSV
     * @var string
     */
    protected $delimiter = null;

    /**
     * Ouvre le fichier CSV
     *
     * @param string $file
     * @param string $delimiter
     * @throws \Exception
     */
    public function __construct($file, $delimiter = ',')
    {
        try {
            $this->filePointer = fopen($file, 'rb');
            $this->delimiter = $delimiter;
        } catch (\Exception $e) {
            throw new \Exception('Impossible de lire le fichier : ' . $file);
        }
    }

    /**
     * Réinitialise le pointeur
     */
    public function rewind(): void
    {
        $this->rowCounter = 0;
        rewind($this->filePointer);
    }

    /**
     * Retourne la ligne courante
     */
    public function current(): array
    {
        $this->currentElement = fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);
        $this->rowCounter++;
        return $this->currentElement;
    }

    /**
     * Retourne l'index courant
     */
    public function key(): int
    {
        return $this->rowCounter;
    }

    /**
     * Passe à la ligne suivante
     */
    public function next(): bool
    {
        if (is_resource($this->filePointer)) {
            return !feof($this->filePointer);
        }
        return false;
    }

    /**
     * Vérifie si la ligne est valide
     */
    public function valid(): bool
    {
        if (!$this->next()) {
            if (is_resource($this->filePointer)) {
                fclose($this->filePointer);
            }
            return false;
        }
        return true;
    }
}


/**
 * @example Exemple d'utilisation du Pattern Iterator
 */
$csv = new CsvIterator(__DIR__ . '/cats.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}