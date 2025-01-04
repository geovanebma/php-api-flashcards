<?php
require_once '../config/database.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['question']) && !empty($data['answer'])) {
    $stmt = $pdo->prepare('INSERT INTO flashcards (question, answer) VALUES (:question, :answer)');
    $stmt->execute([
        ':question' => $data['question'],
        ':answer' => $data['answer'],
    ]);

    echo json_encode(['message' => 'Flashcard criado com sucesso!']);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Dados inválidos.']);
}