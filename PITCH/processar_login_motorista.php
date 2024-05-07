<?php
require ('Conexao Motorista.php');

if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Evitar SQL Injection utilizando prepared statements
    $consulta = $pdo->prepare("SELECT * FROM motorista WHERE usuario = ? AND senha = ?");
    $consulta->execute([$usuario, $senha]);

    // Verificar se foi retornado exatamente 1 resultado
    if ($consulta->rowCount() == 1) {
        // Se as credenciais coincidem, redirecione para a tela do site
        header("Location: Tela Site.php");
        exit;
    } else {
        // Se as credenciais não coincidem, redirecione para a tela de login com uma mensagem de erro
        header("Location: Login Motorista.php");
        exit;
    }
} else {
    // Se não houver usuário e senha fornecidos, redirecione de volta para a tela de login
    header("Location: Login Motorista.php");
    exit;
}

// Fechar a conexão com o banco de dados
$pdo = null;
?>


