<?php
echo "Inserindo dados abaixo... <br>";
require ('Conexao Cliente.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $nome = $_POST["nome"] . '<br>';
    echo $email = $_POST["email"] . '<br>';
    echo $cpf = $_POST["cpf"] . '<br>';
    echo $sexo = $_POST["sexo"] . '<br>';
    echo $endereco = $_POST["endereco"] . '<br>';
    echo $numero = $_POST["numero"] . '<br>';
    echo $complemento = $_POST["complemento"] . '<br>';
    echo $bairro = $_POST["bairro"] . '<br>';
    echo $cidade = $_POST["cidade"] . '<br>';
    echo $usuario = $_POST["usuario"] . '<br>';
    echo $senha = $_POST["senha"] . '<br>';
    echo "<hr>";

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $email, $cpf, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $usuario, $senha) {
        $sql = "INSERT INTO cliente (nome, email, cpf, sexo, endereco, numero, complemento, bairro, cidade, usuario, senha) VALUES (:nome, :email, :cpf, :sexo, :endereco, :numero, :complemento, :bairro, :cidade, :usuario, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
        $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
        $stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
        $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
        $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $nome, $email, $cpf, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $usuario, $senha)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='Tela Site.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>