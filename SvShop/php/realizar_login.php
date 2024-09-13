<?php
require ('Conexao.php');

if(isset($_POST['username']) && isset($_POST['senha'])) {
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    $consulta = $pdo->prepare("SELECT * FROM cliente WHERE username = ? AND senha = ?");
    $consulta->execute([$username, $senha]);

    if ($consulta->rowCount() == 1) {
        header("Location: ../index.html");
        exit;
    } else {
        header("Location: ../views/login.php");
        exit;
    }
} else {
    header("Location: ../views/login.php");
    exit;
}

$pdo = null;
?>
