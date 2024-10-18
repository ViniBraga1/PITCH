<?php
require('Conexao.php');
session_start(); // Iniciar a sessão para acessar o carrinho

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $payment_method = $_POST['payment_method'];
    $amount = $_POST['amount']; // Definimos o valor vindo do formulário

    if ($payment_method == 'cartao') {
        $card_number = $_POST['card_number'];
        $card_name = $_POST['card_name'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];

        // Verificar se todos os campos do cartão foram preenchidos
        if (empty($card_number) || empty($card_name) || empty($expiry_date) || empty($cvv)) {
            die('Todos os campos do cartão são obrigatórios.');
        }

        echo "Pagamento com cartão cadastrado com sucesso!<br>";
        echo "Nome: $nome<br>";
        echo "Valor: R$" . number_format($amount, 2, ',', '.') . "<br>";
        echo "Número do Cartão: $card_number<br>";
        echo "Nome no Cartão: $card_name<br>";
        echo "Data de Validade: $expiry_date<br>";
        echo "CVV: $cvv<br>";
    } else {
        echo "Pagamento em dinheiro cadastrado com sucesso!<br>";
        echo "Nome: $nome<br>";
        echo "Valor: R$" . number_format($amount, 2, ',', '.') . "<br>";
    }

    echo "<a href='../index.php'>Voltar ao site</a>";

    // Limpar o carrinho após o pagamento
    unset($_SESSION['carrinho']);
} else {
    echo "Método de requisição inválido.";
}
?>
