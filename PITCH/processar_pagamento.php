<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $amount = $_POST['amount'];
    $payment_method = $_POST['payment_method'];

    if ($payment_method == 'cartao') {
        $card_number = $_POST['card_number'];
        $card_name = $_POST['card_name'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];

     
        if (empty($card_number) || empty($card_name) || empty($expiry_date) || empty($cvv)) {
            die('Todos os campos do cartão são obrigatórios.');
        }

        
        
        echo "Pagamento com cartão cadastrado com sucesso!<br>";
        echo "Nome: $nome<br>";
        echo "Valor: R$ $amount<br>";
        echo "Número do Cartão: $card_number<br>";
        echo "Nome no Cartão: $card_name<br>";
        echo "Data de Validade: $expiry_date<br>";
        echo "CVV: $cvv<br>";
        echo "Registro inserido com sucesso!<br>" . "<a href='Index.php'>Voltar</a>";
    } else {
        echo "Pagamento em dinheiro cadastrado com sucesso!<br>";
        echo "Nome: $nome<br>";
        echo "Valor: R$ $amount<br>";
    }
} else {
    echo "Método de requisição inválido.";
}
?>