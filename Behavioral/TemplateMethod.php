<?php

namespace LuigiG34\Behavioral;

abstract class BoissonChaude
{
    final public function preparer()
    {
        $this->faireBouillirEau();
        $this->infuser();
        $this->verserDansTasse();
        $this->ajouterSupplements();
    }

    // Étapes communes
    protected function faireBouillirEau()
    {
        echo "Faire bouillir l'eau\n";
    }

    protected function verserDansTasse()
    {
        echo "Verser dans la tasse\n";
    }

    abstract protected function infuser();
    abstract protected function ajouterSupplements();
}

class The extends BoissonChaude
{
    protected function infuser()
    {
        echo "Infuser le thé\n";
    }

    protected function ajouterSupplements()
    {
        echo "Ajouter du citron\n";
    }
}

class Cafe extends BoissonChaude
{
    protected function infuser()
    {
        echo "Infuser le café\n";
    }

    protected function ajouterSupplements()
    {
        echo "Ajouter du sucre et du lait\n";
    }
}


/**
 * @example Exemple d'utilisation du Pattern TemplateMethod
 */
echo "Préparation du thé :\n";
$the = new The();
$the->preparer();

echo "\nPréparation du café :\n";
$cafe = new Cafe();
$cafe->preparer();