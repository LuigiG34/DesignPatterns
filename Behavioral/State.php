<?php

namespace LuigiG34\Behavioral;

class OrderContext
{
    private OrderState $state;

    public function __construct(OrderState $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(OrderState $state): void
    {
        echo "Order: Changing state to " . get_class($state) . "\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function pay(): void
    {
        $this->state->pay();
    }

    public function ship(): void
    {
        $this->state->ship();
    }
}


abstract class OrderState
{
    protected OrderContext $context;

    public function setContext(OrderContext $context): void
    {
        $this->context = $context;
    }

    abstract public function pay(): void;
    abstract public function ship(): void;
}


class PendingState extends OrderState
{
    public function pay(): void
    {
        echo "Pending: Payment received, moving to Paid state.\n";
        $this->context->transitionTo(new PaidState());
    }

    public function ship(): void
    {
        echo "Pending: Cannot ship, payment not received yet.\n";
    }
}

class PaidState extends OrderState
{
    public function pay(): void
    {
        echo "Paid: Payment already received.\n";
    }

    public function ship(): void
    {
        echo "Paid: Shipping the order, moving to Shipped state.\n";
        $this->context->transitionTo(new ShippedState());
    }
}

class ShippedState extends OrderState
{
    public function pay(): void
    {
        echo "Shipped: Cannot process payment, order already shipped.\n";
    }

    public function ship(): void
    {
        echo "Shipped: Order already shipped.\n";
    }
}

/**
 * @example Exemple d'utilisation du Pattern State
 */
$order = new OrderContext(new PendingState());

$order->ship();
$order->pay();  
$order->pay(); 
$order->ship();
$order->ship();
