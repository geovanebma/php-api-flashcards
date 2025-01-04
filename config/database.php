<?php
$databasePath = __DIR__ . '/flashcards.sqlite'; // Caminho para o arquivo SQLite

try {
    $pdo = new PDO("sqlite:$databasePath");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS flashcards (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            question TEXT NOT NULL,
            answer TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");
} catch (PDOException $e) {
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}


try {
    $pdo = new PDO("sqlite:$databasePath");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}
