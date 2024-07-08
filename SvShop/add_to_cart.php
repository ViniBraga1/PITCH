<?php
session_start();

require ('Conexao.php');

header('Content-Type: application/json');


// Obter os dados da solicitação
$data = json_decode(file_get_contents('php://input'), true);
$itemId = $data['id'];

// Verificar se o item já está no carrinho
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Adicionar o item ao carrinho
if (!in_array($itemId, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $itemId;
}

echo json_encode(['success' => true]);
?>
