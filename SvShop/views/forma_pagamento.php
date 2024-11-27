<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SvShop®</title>
    <link rel="stylesheet" href="../css/forma_pagamento.css"> 
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: white;
        padding: 20px;
        text-align: center;
    }

    h2 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 36px;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-family: 'Montserrat', sans-serif;
    }

    input, select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
    }

    input[type="submit"] {
        background-color: black;
        color: white;
        border: none;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
    }

    input[type="submit"]:hover {
        background-color: #444;
    }
</style>

<body>
<div class="hover14 column">
        <a href="../index.php"><figure><img src="../IMG/SV-removebg-preview.png" width="130px"></figure></a>
    </div>
     

    <h2>Cadastro de Pagamento</h2>
    <?php require("../php/Conexao.php"); ?>

    <?php
        // Verificar se o valor total foi passado pela URL
        $total = isset($_GET['total']) ? floatval($_GET['total']) : 0;
    ?>

    <form action="../php/processar_pagamento.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="number" id="cpf" name="cpf" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <label for="cep">CEP:</label><br>
        <input type="number" id="cep" name="cep" required><br><br>

        <label for="payment_method">Forma de Pagamento:</label><br>
        <select id="payment_method" name="payment_method" required>
            <option value="cartao">Cartão de Crédito</option>
            <option value="cartao">Cartão de Débito</option>
        </select><br><br>

        <div id="card_details" style="display: block;">
            <label for="card_number">Número do Cartão:</label><br>
            <input type="text" id="card_number" name="card_number" required><br><br>

            <label for="card_name">Nome no Cartão:</label><br>
            <input type="text" id="card_name" name="card_name" required><br><br>

            <label for="expiry_date">Data de Validade (MM/AA):</label><br>
            <input type="text" id="expiry_date" name="expiry_date" required><br><br>

            <label for="cvv">CVV:</label><br>
            <input type="text" id="cvv" name="cvv" required><br><br>
        </div>

        <!-- Campo oculto para o valor total -->
        <input type="hidden" name="amount" value="<?php echo number_format($total, 2, '.', ''); ?>">

        <input type="submit" value="Cadastrar Pagamento">
    </form>
    
</body>

</html>