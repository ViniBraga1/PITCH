<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoristas</title>
</head>
<body>
    
<h1>LISTA DE MOTORISTAS</h1>
    <?php
        require ('Conexao Motorista.php');

        // Função para listar todos os registros do banco de dados
        function listarRegistros($pdo) {
        $sql = "SELECT * FROM motorista";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($pdo);
            // Exibindo os dados em uma tabela
            echo "<table border='1'>
                <tr>
                    <th>idMotorista</th>
                    <th>nome</th>
                    <th>sexo</th>
                    <th>carro</th>
                    <th>placa</th>
                </tr>";
            foreach ($registros as $registro) {
                echo "<tr>";
                echo "<td>" . $registro['idMotorista'] . "</td>";
                echo "<td>" . $registro['nome'] . "</td>";
                echo "<td>" . $registro['sexo'] . "</td>";
                echo "<td>" . $registro['carro'] . "</td>";
                echo "<td>" . $registro['placa'] . "</td>";
                echo "<td>
                    <a href='Solicitar.php?idMotorista=" . $registro['idMotorista'] . "'>Ver</a>
                    <a href='Tela Avaliacao.php?idMotorista=" . $registro['idMotorista'] . "'>Avaliação</a>
                </td>";
                }
                echo "</tr>";
            echo "</table>";
    ?>
</body>
</html>


</body>
</html>