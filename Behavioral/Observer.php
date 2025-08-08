<?php

namespace LuigiG34\Behavioral;

// === Subject ===
class Product implements \SplSubject
{
    private string $name;
    private int $stock = 0;
    private \SplObjectStorage $observers;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function restock(int $quantity): void
    {
        $this->stock += $quantity;
        echo "{$this->name} restocked with {$quantity} units. Stock: {$this->stock}\n";
        $this->notify();
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class EmailNotifier implements \SplObserver
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function update(\SplSubject $subject): void
    {
        echo "Email to {$this->email}: '{$subject->getName()} is back in stock!'\n";
    }
}

class SmsNotifier implements \SplObserver
{
    private string $phone;

    public function __construct(string $phone)
    {
        $this->phone = $phone;
    }

    public function update(\SplSubject $subject): void
    {
        echo "SMS to {$this->phone}: '{$subject->getName()} available now!'\n";
    }
}


/**
 * @example Exemple d'utilisation du Pattern Observer
 */
$product = new Product("PS5 Console");

$product->attach(new EmailNotifier("john@example.com"));
$product->attach(new SmsNotifier("+123456789"));

$product->restock(5);
