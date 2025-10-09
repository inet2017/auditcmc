<?php
require_once 'config/database.php';

$db = Database::connect();

// Crear la tabla migrations si no existe
$db->exec("CREATE TABLE IF NOT EXISTS migrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    migration VARCHAR(255) NOT NULL,
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$aplicadas = $db->query("SELECT migration FROM migrations")->fetchAll(PDO::FETCH_COLUMN);
$migraciones = glob(__DIR__ . '/migrations/*.php');
sort($migraciones);

foreach ($migraciones as $archivo) {
    $nombre = basename($archivo);

    if (!in_array($nombre, $aplicadas)) {
        echo "Aplicando migración: $nombre\n";
        require $archivo;

        $stmt = $db->prepare("INSERT INTO migrations (migration) VALUES (?)");
        $stmt->execute([$nombre]);

        echo "✅ Migración $nombre aplicada.\n\n";
    } else {
        echo "⏩ Migración $nombre ya aplicada.\n";
    }
}
