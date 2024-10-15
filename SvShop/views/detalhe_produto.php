<?php
// Inicia a sessão
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "svshop"; // Nome do banco de dados

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

// Adicionar ao carrinho
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tamanhoSelecionado'])) {
    $tamanhoSelecionado = $_POST['tamanhoSelecionado'];

    // Criar o carrinho se ele não existir
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Adicionar o item ao carrinho
    $_SESSION['carrinho'][] = [
        'id' => $camisa['idCamisa'],
        'nome' => $camisa['nome'],
        'preco' => $camisa['preco'],
        'tamanho' => $tamanhoSelecionado
    ];

    // Redireciona para a página do carrinho
    header("Location: carrinho.php");
    exit;
}

$mysqli->close();
?>

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
    <div class="container">
        <div class="image-gallery">
            <img src="../uploads/<?php echo htmlspecialchars($camisa['foto_frente']); ?>" alt="Imagem Frente"
                 onclick="mostrarImagem('<?php echo htmlspecialchars($camisa['foto_frente']); ?>')">
            <img src="../uploads/<?php echo htmlspecialchars($camisa['foto_verso']); ?>" alt="Imagem Verso"
                 onclick="mostrarImagem('<?php echo htmlspecialchars($camisa['foto_verso']); ?>')">
        </div>

        <div class="main-image">
            <img id="imagemPrincipal" src="../uploads/<?php echo htmlspecialchars($camisa['foto_frente']); ?>"
                 alt="<?php echo htmlspecialchars($camisa['nome']); ?>">
        </div>

        <div class="product-details">
            <h1><?php echo htmlspecialchars($camisa['nome']); ?></h1>
            <div class="description"><?php echo htmlspecialchars($camisa['descricao']); ?></div>
            <div class="price">R$ <?php echo htmlspecialchars($camisa['preco']); ?></div>
            <div class="stock">Quantidade em estoque: <?php echo htmlspecialchars($camisa['quantidade']); ?></div>

            <div class="sizes">
                <span>Tamanho:</span>
                <button type="button" onclick="selecionarTamanho(this, 'P')">P</button>
                <button type="button" onclick="selecionarTamanho(this, 'M')">M</button>
                <button type="button" onclick="selecionarTamanho(this, 'G')">G</button>
                <button type="button" onclick="selecionarTamanho(this, 'GG')">GG</button>
            </div>

            <form id="formCompra" method="POST">
                <input type="hidden" name="tamanhoSelecionado" id="tamanhoSelecionado">
                <button class="buy-now" type="submit">COMPRAR AGORA</button>
            </form>
        </div>
    </div>

    <script>
        function mostrarImagem(imagem) {
            document.getElementById('imagemPrincipal').src = '../uploads/' + imagem;
        }

        function selecionarTamanho(button, tamanho) {
            // Atualiza o campo oculto com o tamanho selecionado
            document.getElementById('tamanhoSelecionado').value = tamanho;

            // Remove a classe 'selected' de todos os botões
            const buttons = document.querySelectorAll('.sizes button');
            buttons.forEach(btn => btn.classList.remove('selected'));

            // Adiciona a classe 'selected' ao botão clicado
            button.classList.add('selected');
        }

        document.getElementById('formCompra').addEventListener('submit', function (e) {
            const tamanhoSelecionado = document.getElementById('tamanhoSelecionado').value;

            if (!tamanhoSelecionado) {
                e.preventDefault();
                alert('Por favor, selecione um tamanho antes de comprar.');
            }
        });
    </script>
</body>

</html>
