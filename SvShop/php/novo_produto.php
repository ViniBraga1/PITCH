<?php
require ('Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $descricao, $preco) {
        $sql = "INSERT INTO camisa (nome, descricao, preco) VALUES (:nome, :descricao, :preco)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->bindParam(':preco', $preco, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $nome, $descricao, $preco)) {
    echo "Podruto inserido com sucesso!<br>" . "<a href='../index.html'>Voltar ao site</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>