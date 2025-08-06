<?php

namespace LuigiG34\Behavioral;

/**
 * Interface Mediator
 * Permet à chaque composant de notifier un événement
 * sans dépendre directement des autres composants.
 */
interface Mediator
{
    public function notify(object $sender, string $event): void;
}

/**
 * Médiateur concret : coordonne les composants entre eux.
 */
class PaymentMediator implements Mediator
{
    private $mailer;
    private $stockManager;
    private $invoiceGenerator;

    public function __construct(Mailer $mailer, StockManager $stockManager, InvoiceGenerator $invoiceGenerator)
    {
        $this->mailer = $mailer;
        $this->mailer->setMediator($this);

        $this->stockManager = $stockManager;
        $this->stockManager->setMediator($this);

        $this->invoiceGenerator = $invoiceGenerator;
        $this->invoiceGenerator->setMediator($this);
    }

    public function notify(object $sender, string $event): void
    {
        if ($event === 'payment_success') {
            echo "[Mediator] Paiement reçu, on déclenche les actions suivantes :\n";
            $this->invoiceGenerator->generate();
            $this->stockManager->update();
            $this->mailer->sendConfirmation();
        }
    }
}

/**
 * Composant de base, contient une référence vers le médiateur
 */
abstract class BaseComponent
{
    protected $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}

/**
 * Composant : envoie un email de confirmation
 */
class Mailer extends BaseComponent
{
    public function sendConfirmation(): void
    {
        echo "[Mailer] Email de confirmation envoyé.\n";
    }
}

/**
 * Composant : met à jour le stock
 */
class StockManager extends BaseComponent
{
    public function update(): void
    {
        echo "[Stock] Stock mis à jour.\n";
    }
}

/**
 * Composant : génère une facture
 */
class InvoiceGenerator extends BaseComponent
{
    public function generate(): void
    {
        echo "[Invoice] Facture générée.\n";
    }
}

/**
 * Classe qui déclenche le paiement
 */
class PaymentGateway
{
    private $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function pay(): void
    {
        echo "[Payment] Paiement réussi.\n";
        $this->mediator->notify($this, 'payment_success');
    }
}


/**
 * @example Exemple d'utilisation du Pattern Mediator
 */
$mailer = new Mailer();
$stock = new StockManager();
$invoice = new InvoiceGenerator();

$mediator = new PaymentMediator($mailer, $stock, $invoice);

$gateway = new PaymentGateway($mediator);
$gateway->pay();