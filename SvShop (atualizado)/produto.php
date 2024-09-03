<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="produto.css">
    <link rel="stylesheet" href="produto.js">
</head>
<body>
    <div class="foto1">

        
    </div>
    <h1>Adicionar Novo Produto</h1>
    <?php require ("Conexao.php"); ?>
    <form action="novo_produto.php" id="add-product-form" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>

        <label for="imagem">Imagem do Produto:</label>
        <input type="file" id="imagem" name="imagem" accept="image/*" required>

        <button type="submit">Adicionar Produto</button>
    </form>

    <script src="script.js"></script>
</body>
</html>         