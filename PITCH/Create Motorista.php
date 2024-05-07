<?php
require ('Conexao Motorista.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $cnh = $_POST["cnh"];
    $datavenc = $_POST["datavenc"];
    $categoriacnh = $_POST["categoriacnh"];
    $codigo = $_POST["codigo"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    "<hr>";

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $email, $cpf, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $cnh, $datavenc, $categoriacnh, $codigo, $usuario, $senha) {
        $sql = "INSERT INTO motorista (nome, email, cpf, sexo, endereco, numero, complemento, bairro, cidade, cnh, datavenc, categoriacnh, codigo, usuario, senha) VALUES (:nome, :email, :cpf, :sexo, :endereco, :numero, :complemento, :bairro, :cidade, :cnh, :datavenc, :categoriacnh, :codigo, :usuario, :senha)";
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
        $stmt->bindParam(':cnh', $cnh, PDO::PARAM_STR);
        $stmt->bindParam(':datavenc', $datavenc, PDO::PARAM_STR);
        $stmt->bindParam(':categoriacnh', $categoriacnh, PDO::PARAM_STR);
        $stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $nome, $email, $cpf, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $cnh, $datavenc, $categoriacnh, $codigo, $usuario, $senha)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='Login Motorista.php'>Fazer Login</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>