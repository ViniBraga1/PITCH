<?php
echo "Atualizando dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["idCliente"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];
    $endereco= $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro= $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $UF = $_POST["UF"];
    echo "<hr>";
 
    // Função para Atualizar o registro no banco de dados
    function atualizarRegistro($pdo, $id, $nome, $email, $cpf, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $UF) {
        $sql = "UPDATE cliente SET nome = '$nome', email = '$email', cpf = '$cpf', sexo = '$sexo', endereco = '$endereco', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', UF = '$UF' WHERE idCliente = $id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (atualizarRegistro($pdo, $id, $nome, $email, $cpf, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $UF)) {
    echo "Registro atualizado com sucesso!<br>" . "<a href='Ver Cliente.php'>Voltar</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>