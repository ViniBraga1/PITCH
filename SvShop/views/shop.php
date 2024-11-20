<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="../css/shop.css"> 
    <link rel="shortcut icon" href="../IMG/SV-removebg-preview.png"> 
</head>
<body>
    
    <section id="RodaPeInicial">
        <div><button id="Tema">TEMA</button></div>
        <div><a href="shop.php">SHOP</a></div>
        <a href="drop.html"><div>DROP</div></a>
        <div class="hover14 column" id="ii"><a href="../index.php"><figure><img src="../IMG/SV-removebg-preview.png" width="130px"></figure></a></div>
        <div><a href="contato.html">CONTATO</a></div>
        <div><a href="login.php"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></span> </a></div>
        <div><a href="carrinho.php"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></span> </a></div>
        <a href="https://www.instagram.com/_.svshop/"><div>Instagram</div></a>
        <div><a href="produto.php">NOVO PRODUTO</a></div>
        <div><a href="sobre.html">SOBRE NÓS</a></div>
    </section>

    <section id="GRIDProd">
        <?php
        // Conectar ao banco de dados
        require ("../php/Conexao.php");

        // Buscar todas as camisas com estoque maior que 0
        $sql = "SELECT * FROM camisa WHERE quantidade > 0";  // Filtro para mostrar apenas camisas com estoque disponível
        $result = $pdo->query($sql);

        if ($result->rowCount() > 0) {
            // Exibir os resultados
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="produto">';
                echo '<a href="detalhe_produto.php?id=' . htmlspecialchars($row['idCamisa']) . '">'; // Link para a página de detalhes
                echo '<img src="../uploads/' . htmlspecialchars($row['foto_frente']) . '" alt="Foto frente" width="200px">';
                echo '<section>' . htmlspecialchars($row['nome']) . '</section>';
                echo '<section id="I2">R$ ' . htmlspecialchars($row['preco']) . '</section>';
                echo '</a>'; // Fechamento do link
                echo '</div>';
            }
        } else {
            echo '<p>Nenhuma camisa disponível no momento.</p>';
        }
        ?>
    </section>

    <script>
        const themeToggle = document.getElementById('Tema');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>

</body>
</html>
