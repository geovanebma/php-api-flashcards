<?php
require_once '../config/database.php';

$stmt = $pdo->query('SELECT * FROM flashcards');
$flashcards = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($flashcards);