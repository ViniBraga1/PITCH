<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="../css/produto.css">
</head>
<body>
    <h1>Adicionar Novo Produto</h1>
    <?php require ("../php/Conexao.php"); ?>
    <form action="../php/novo_produto.php" method="POST" id="add-product-form" enctype="multipart/form-data">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required>

        <label for="sexo">Sexo (F ou M):</label>
        <input type="text" id="sexo" name="sexo" required>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required>

        <label for="foto_frente">Foto frente da camisa:</label>
        <input type="file" id="foto_frente" name="foto_frente" accept="image/*" required>

        <label for="foto_verso">Foto verso da camisa:</label>
        <input type="file" id="foto_verso" name="foto_verso" accept="image/*" required>

        <button type="submit">Adicionar Produto</button>
    </form>
</body>
</html>
