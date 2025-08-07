<?php

namespace LuigiG34\Behavioral;

class CartMemento
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getState(): array
    {
        return $this->items;
    }
}


class ShoppingCart
{
    private array $items = [];

    public function addItem(string $item): void
    {
        $this->items[] = $item;
    }

    public function removeLastItem(): void
    {
        array_pop($this->items);
    }

    public function showCart(): void
    {
        echo "Cart: [" . implode(', ', $this->items) . "]\n";
    }

    public function save(): CartMemento
    {
        return new CartMemento($this->items);
    }

    public function restore(CartMemento $memento): void
    {
        $this->items = $memento->getState();
    }
}


class CartHistory
{
    private array $history = [];

    public function backup(CartMemento $memento): void
    {
        $this->history[] = $memento;
    }

    public function undo(): ?CartMemento
    {
        return array_pop($this->history);
    }
}


/**
 * @example Exemple d'utilisation du Pattern Memento
 */
$cart = new ShoppingCart();
$history = new CartHistory();

$cart->addItem("iPhone");
$history->backup($cart->save());

$cart->addItem("MacBook");
$history->backup($cart->save());

$cart->addItem("iPad");

$cart->showCart();

$cart->restore( $history->undo());
$cart->showCart();

$cart->restore($history->undo());
$cart->showCart();
