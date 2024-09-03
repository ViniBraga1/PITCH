<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pagamento</title>
</head>
<body>
    <h2>Cadastro de Pagamento</h2>
    <?php require ("Conexao.php"); ?>
    <form action="processar_pagamento.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="payment_method">Forma de Pagamento:</label><br>
        <select id="payment_method" name="payment_method" required>
            <option value="dinheiro">Dinheiro</option>
            <option value="cartao">Cartão</option>
        </select><br><br>

        <div id="card_details" style="display: none;">
            <label for="card_number">Número do Cartão:</label><br>
            <input type="text" id="card_number" name="card_number"><br><br>

            <label for="card_name">Nome no Cartão:</label><br>
            <input type="text" id="card_name" name="card_name"><br><br>

            <label for="expiry_date">Data de Validade (MM/AA):</label><br>
            <input type="text" id="expiry_date" name="expiry_date"><br><br>

            <label for="cvv">CVV:</label><br>
            <input type="text" id="cvv" name="cvv"><br><br>
        </div>

        <input type="submit" value="Cadastrar Pagamento">
    </form>

    <script>
        document.getElementById('payment_method').addEventListener('change', function() {
            var cardDetails = document.getElementById('card_details');
            if (this.value === 'cartao') {
                cardDetails.style.display = 'block';
            } else {
                cardDetails.style.display = 'none';
            }
        });
    </script>
</body>
</html>