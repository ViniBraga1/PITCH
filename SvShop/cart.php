<?php
session_start();

require ('Conexao.php');

// Obter os itens do carrinho
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Obter detalhes dos itens do banco de dados
if (!empty($cartItems)) {
    $itemIds = implode(',', array_map('intval', $cartItems));
    $sql = "SELECT * FROM camisa WHERE idCamisa IN ($itemIds)";
    $result = $conn->query($sql);
    $items = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $items = [];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <?php if (!empty($items)): ?>
        <ul>
            <?php foreach ($items as $item): ?>
                <li>
                    <?php echo $item['nome']; ?> - <?php echo $item['preco']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Seu carrinho está vazio.</p>
    <?php endif; ?>
</body>
</html>
