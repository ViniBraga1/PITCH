<?php
session_start();

// Verifica se foi solicitado para excluir um item
if (isset($_GET['acao']) && $_GET['acao'] === 'excluir' && isset($_GET['indice'])) {
    $indice = intval($_GET['indice']);
    if (isset($_SESSION['carrinho'][$indice])) {
        // Remove o item do carrinho
        unset($_SESSION['carrinho'][$indice]);
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']); // Reorganiza os índices do array
    }
}

// Verifica se foi solicitado para limpar o carrinho
if (isset($_GET['acao']) && $_GET['acao'] === 'limpar') {
    unset($_SESSION['carrinho']); // Limpa todo o carrinho
}

// Total do carrinho
$total = 0;
if (isset($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $item) {
        $total += $item['preco'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="shortcut icon" href="../IMG/SV-removebg-preview.png">
</head>
<body>
    <div class="hover14 column">
        <a href="../index.html"><figure><img src="../IMG/SV-removebg-preview.png" width="130px"></figure></a>
    </div>
    <header>
        <h1>Carrinho de Compras</h1>
        <ul class="cart-list">
            <?php if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0): ?>
                <?php foreach ($_SESSION['carrinho'] as $indice => $item): ?>
                    <li class="cart-item">
                        <div class="item-details">
                            <span><?php echo htmlspecialchars($item['nome']); ?></span><br>
                            <span>Tamanho: <?php echo htmlspecialchars($item['tamanho']); ?></span>
                        </div>
                        <span class="item-price">R$<?php echo number_format($item['preco'], 2, ',', '.'); ?></span>
                        <!-- Botão para excluir o item -->
                        <button class="remove-item" onclick="window.location.href='carrinho.php?acao=excluir&indice=<?php echo $indice; ?>'">Excluir</button>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Seu carrinho está vazio.</p>
            <?php endif; ?>
        </ul>

        <?php if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0): ?>
            <div class="total">
                <p>Total: R$<?php echo number_format($total, 2, ',', '.'); ?></p>
                <button id="finalizar-compra" onclick="finalizarCompra(<?php echo $total; ?>)">Finalizar Compra</button>
            </div>
        <?php endif; ?>

        <div class="actions">
            <button class="continue-shopping" onclick="window.location.href='shop.php'">Continuar Comprando</button>
            <button class="clear-cart" onclick="window.location.href='carrinho.php?acao=limpar'">Limpar Carrinho</button>
        </div>


        <script>
            function finalizarCompra(total) {
                window.location.href = "forma_pagamento.php?total=" + total;
            }
        </script>
</body>
</html>
