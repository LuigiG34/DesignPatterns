<?php

namespace LuigiG34\Behavioral;

interface ShippingStrategy
{
    public function calculate(float $weightKg, string $destinationCountry): float;
    public function getName(): string;
}

class ColissimoStrategy implements ShippingStrategy
{
    public function calculate(float $weightKg, string $destinationCountry): float
    {
        $base = 4.90;
        $perKg = 1.20;
        $price = $base + $perKg * max(0, $weightKg - 0.5);

        if ($destinationCountry !== 'FR') {
            $price += 6.00;
        }

        return round($price, 2);
    }

    public function getName(): string { return 'colissimo'; }
}

class DHLExpressStrategy implements ShippingStrategy
{
    public function calculate(float $weightKg, string $destinationCountry): float
    {
        $base = 12.00;
        $perKg = 3.50;
        $intlSurcharge = ($destinationCountry === 'FR') ? 0.0 : 9.0;

        return round($base + $perKg * $weightKg + $intlSurcharge, 2);
    }

    public function getName(): string { return 'dhl_express'; }
}

class ShippingContext
{
    public function __construct(private ShippingStrategy $strategy) {}

    public function setStrategy(ShippingStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function quote(float $weightKg, string $destinationCountry): float
    {
        return $this->strategy->calculate($weightKg, $destinationCountry);
    }
}

class ShippingStrategyResolver
{
    /** @var ShippingStrategy[] */
    public function __construct(private array $strategies)
    {
        // $strategies = [new ColissimoStrategy(), new DHLExpressStrategy(), ...]
    }

    public function for(string $hint): ShippingStrategy
    {
        foreach ($this->strategies as $s) {
            if ($s->getName() === $hint) {
                return $s;
            }
        }
        return $this->strategies[0];
    }
}

/**
 * @example Exemple d'utilisation du Pattern Strategy
 */
$resolver = new ShippingStrategyResolver([
    new ColissimoStrategy(),
    new DHLExpressStrategy(),
]);

$ctx = new ShippingContext($resolver->for('colissimo'));
echo "Colissimo FR (1.2kg): " . $ctx->quote(1.2, 'FR') . "€\n";

$ctx->setStrategy($resolver->for('dhl_express'));
echo "DHL Intl (1.2kg, US): " . $ctx->quote(1.2, 'US') . "€\n";
