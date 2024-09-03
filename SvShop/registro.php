<?php
require ('Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $username, $email, $senha) {
        $sql = "INSERT INTO cliente (username, email, senha) VALUES (:username, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $username, $email, $senha)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='Index.php'>Fazer Login</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>