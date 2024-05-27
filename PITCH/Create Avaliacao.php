<?php
require ('Conexao Avaliacao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Estrela1 = $_POST["Estrela1"];
    $Estrela2 = $_POST["Estrela2"];
    $Estrela3 = $_POST["Estrela3"];
    $Estrela4 = $_POST["Estrela4"];
    $Estrela5 = $_POST["Estrela5"];

    // Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $Estrela1, $Estrela2, $Estrela3, $Estrela4, $Estrela5) {
        $sql = "INSERT INTO cliente (Estrela1, Estrela2, Estrela3, Estrela4, Estrela5) VALUES (:Estrela1, :Estrela2, :Estrela3, :Estrela4, :Estrela5)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Estrela1', $Estrela1, PDO::PARAM_STR);
        $stmt->bindParam(':Estrela2', $Estrela2, PDO::PARAM_STR);
        $stmt->bindParam(':Estrela3', $Estrela3, PDO::PARAM_STR);
        $stmt->bindParam(':Estrela4', $Estrela4, PDO::PARAM_STR);
        $stmt->bindParam(':Estrela5', $Estrela5, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($pdo, $Estrela1, $Estrela2, $Estrela3, $Estrela4, $Estrela5)) {
    echo "Registro inserido com sucesso!<br>" . "<a href='Tela Site.php'>Voltar ao Site</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>