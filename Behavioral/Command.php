<?php

namespace LuigiG34\Behavioral;


/**
 * Interface Command
 * Déclare les méthodes principales d'exécution et de métadonnées.
 */
interface Command
{
    public function execute(): void;
    public function getId(): int;
    public function getStatus(): int;
}

/**
 * Classe abstraite représentant une commande d'impression générique.
 * Fournit l'infrastructure de base partagée par toutes les commandes concrètes.
 */
abstract class PrintCommand implements Command
{
    public $id;
    public $status = 0;

    protected $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function execute(): void
    {
        if (!file_exists($this->filePath)) {
            echo "File not found: {$this->filePath}\n";
            return;
        }

        $this->printFile();
        $this->complete();
    }

    // Méthode à implémenter par chaque commande d'impression spécifique
    abstract protected function printFile(): void;

    protected function complete(): void
    {
        $this->status = 1;
        PrintQueue::get()->completeCommand($this);
    }
}

/**
 * Commande concrète pour imprimer un contrat PDF.
 */
class PrintContractCommand extends PrintCommand
{
    protected function printFile(): void
    {
        echo "Printing contract from: {$this->filePath}\n";
        // Simuler une impression
        sleep(1);
    }
}

/**
 * Commande concrète pour imprimer une facture PDF.
 */
class PrintInvoiceCommand extends PrintCommand
{
    protected function printFile(): void
    {
        echo "Printing invoice from: {$this->filePath}\n";
        // Simuler une impression
        sleep(1);
    }
}

/**
 * La classe PrintQueue agit comme un invocateur.
 * Elle exécute les commandes en file d'attente une par une.
 */
class PrintQueue
{
    private $db;

    public function __construct()
    {
        $this->db = new \SQLite3(__DIR__ . '/print_queue.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
        $this->db->query('CREATE TABLE IF NOT EXISTS commands (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            command TEXT,
            status INTEGER
        )');
    }

    public function isEmpty(): bool
    {
        $query = 'SELECT COUNT(*) FROM commands WHERE status = 0';
        return $this->db->querySingle($query) === 0;
    }

    public function add(Command $command): void
    {
        $query = 'INSERT INTO commands (command, status) VALUES (:command, :status)';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':command', base64_encode(serialize($command)));
        $stmt->bindValue(':status', $command->getStatus());
        $stmt->execute();
    }

    public function getCommand(): ?Command
    {
        $record = $this->db->querySingle('SELECT * FROM commands WHERE status = 0 LIMIT 1', true);
        if (!$record) return null;

        $command = unserialize(base64_decode($record['command']));
        $command->id = $record['id'];
        return $command;
    }

    public function completeCommand(Command $command): void
    {
        $query = 'UPDATE commands SET status = :status WHERE id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':status', $command->getStatus());
        $stmt->bindValue(':id', $command->getId());
        $stmt->execute();
    }

    public function work(): void
    {
        while (!$this->isEmpty()) {
            $command = $this->getCommand();
            if ($command) {
                $command->execute();
            }
        }
    }

    public static function get(): PrintQueue
    {
        static $instance = null;
        if (!$instance) {
            $instance = new PrintQueue();
        }
        return $instance;
    }
}

/**
 * @example Exemple d'utilisation du Pattern Command
 */
$queue = PrintQueue::get();

if ($queue->isEmpty()) {
    $queue->add(new PrintContractCommand(__DIR__ . '/docs/contract1.pdf'));
    $queue->add(new PrintInvoiceCommand(__DIR__ . '/docs/invoice1.pdf'));
}

$queue->work();