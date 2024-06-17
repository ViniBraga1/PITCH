<?php
require ('Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idMotorista = $_POST['idMotorista'];
    $estrela = $_POST["estrela"];

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $idMotorista, $estrela) {
        $sql = "INSERT INTO avaliacao (idMotorista, estrela) VALUES (:idMotorista, :estrela)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idMotorista', $idMotorista, PDO::PARAM_INT);
        $stmt->bindParam(':estrela', $estrela, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $idMotorista, $estrela)) {
    echo "Avaliação realizada com sucesso! Agradecemos o seu feedback!<br>" . "<a href='Tela Site.php'>Voltar ao Site</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>