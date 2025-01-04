<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require 'endpoints/getFlashcards.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'endpoints/createFlashcard.php';
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido.']);
}
