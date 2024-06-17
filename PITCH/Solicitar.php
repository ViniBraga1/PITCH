<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Rotas</title>
    <style>
        
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>MAPA DE ROTAS</h1>


    
    <div id="map"></div>

   
    <script>
        function initMap() {
            
            var mymap = L.map('map').setView([-25.363, 131.044], 4);

            
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(mymap);

           
            var marker = L.marker([-25.363, 131.044]).addTo(mymap);
            marker.bindPopup("<b>Sua Localização</b>").openPopup();
        }
    </script>

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

   
    <script>
        window.onload = initMap;
    </script>

<?php
    // Inclui o arquivo de conexão com o banco de dados
    require('Conexao.php');

    // Verifica se o parâmetro idMotorista foi passado na URL
    if (isset($_GET['idMotorista'])) {
        // Captura o ID do motorista da URL
        $idMotorista = $_GET['idMotorista'];

        // Prepara a consulta para obter os dados do motorista pelo ID
        $sql = "SELECT * FROM motorista WHERE idMotorista = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $idMotorista, PDO::PARAM_INT);
        $stmt->execute();

        // Verifica se encontrou o motorista
        if ($stmt->rowCount() > 0) {
            // Exibe os dados do motorista
            $dadosMotorista = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "<p><strong>Nome:</strong> " . $dadosMotorista['nome'] . "</p>";
            echo "<p><strong>Sexo:</strong> " . $dadosMotorista['sexo'] . "</p>";
            echo "<p><strong>Carro:</strong> " . $dadosMotorista['carro'] . "</p>";
            echo "<p><strong>Placa:</strong> " . $dadosMotorista['placa'] . "</p>";
            echo "<p><strong>Avaliação:</strong></p>";
        } else {
            echo "<p>Nenhum motorista encontrado com o ID fornecido.</p>";
        }
    } else {
        echo "<p>Não foi especificado um ID de motorista.</p>";
    }
    ?>

    <p><a href="Tela Avaliacao.php">Avaliar</a></p>
    <p><a href="Motoristas.php">Voltar</a></p>

</body>
</html>