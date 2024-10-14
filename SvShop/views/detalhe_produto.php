<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="../css/detalhe_produto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";  // Substitua pelo seu nome de usuário do banco de dados
    $password = "";  // Substitua pela senha do seu banco de dados, se houver
    $dbname = "svshop";  // Substitua pelo nome do seu banco de dados

    // Cria a conexão
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($mysqli->connect_error) {
        die("Falha na conexão: " . $mysqli->connect_error);
    }

    // Verifica se o ID da camisa foi passado na URL
    $idCamisa = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($idCamisa > 0) {
        // Consulta para buscar os detalhes da camisa
        $sql = "SELECT * FROM camisa WHERE idCamisa = $idCamisa";
        $result = $mysqli->query($sql);

        if ($result && $result->num_rows > 0) {
            // Obtém os dados da camisa
            $camisa = $result->fetch_assoc();
        } else {
            echo "<p>Camisa não encontrada.</p>";
            exit;
        }
    } else {
        echo "<p>ID da camisa inválido.</p>";
        exit;
    }

    // Fecha a conexão
    $mysqli->close();
    ?>

    <div class="container">

        <!-- Galeria de Imagens -->
        <div class="image-gallery">
            <img src="../uploads/<?php echo htmlspecialchars($camisa['foto_frente']); ?>" alt="Imagem Frente">
            <img src="../uploads/<?php echo htmlspecialchars($camisa['foto_verso']); ?>" alt="Imagem Verso">
        </div>

        <!-- Imagem Principal -->
        <div class="main-image">
            <img src="../uploads/<?php echo htmlspecialchars($camisa['foto_frente']); ?>" alt="<?php echo htmlspecialchars($camisa['nome']); ?>">
        </div>

        <!-- Detalhes do Produto -->
        <div class="product-details">
            <h1><?php echo htmlspecialchars($camisa['nome']); ?></h1>
            <div class="price">R$ <?php echo htmlspecialchars($camisa['preco']); ?></div>
            <div class="discount">R$ <?php echo number_format($camisa['preco'] * 0.94, 2, ',', '.'); ?> no pix (6% de desconto)</div>

            <!-- Tamanhos -->
            <div class="sizes">
                <button onclick="selectSize(this)">P</button>
                <button onclick="selectSize(this)">M</button>
                <button onclick="selectSize(this)">G</button>
                <button onclick="selectSize(this)">GG</button>
            </div>

            <!-- Botão de Comprar -->
            <button class="buy-now">COMPRAR AGORA</button>

            <!-- Informações Adicionais -->
            <div class="info">
                <p>Frete Grátis: para Belo Horizonte, MG e Região</p>
                <p>Compra garantida: Você tem até 30 dias de Garantia</p>
                <p>Troca Grátis: Você tem até 7 dias para testar o produto</p>
            </div>
        </div>
    </div>

    <div class="product-desct">
        <h2><?php echo htmlspecialchars($camisa['nome']); ?></h2>
    </div>

    <div class="product-desct2">
        <p><?php echo nl2br(htmlspecialchars($camisa['descricao'])); ?></p>
    </div>

    <section id="QuadPreto">
        <img src="../IMG/SV-removebg-preview.png" width="240px">
    </section>

    <script>
        function selectSize(button) {
            // Remove a classe 'selected' de todos os botões
            var buttons = document.querySelectorAll('.sizes button');
            buttons.forEach(function (btn) {
                btn.classList.remove('selected');
            });

            // Adiciona a classe 'selected' ao botão clicado
            button.classList.add('selected');
        }
    </script>

</body>
</html>
