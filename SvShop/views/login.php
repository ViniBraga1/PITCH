</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="../css/login.css"> 
    <link rel="shortcut icon" href="IMG/SV-removebg-preview.png"> 
</head>
<body>
    <section id="RodaPeInicial">
        <div><button id="Tema">TEMA</button></div>
        <div><a href="views/shop.html">SHOP</a></div>
        <a href="views/drop.html"><div>DROP</div></a>
        <div class="hover14 column" id="ii"><a href="../index.html"><figure><img src="IMG/SV-removebg-preview.png" width="130px"></figure></a></div>
        <div><a href="views/contato.html">CONTATO</a></div>
        <div><a href="views/login.php"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewsBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></span> </a></div>
        <div><a href="views/carrinho.php"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewsBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></span> </a></div>
        <a href="https://www.instagram.com/_.svshop/"><div>Instagram</div></a>
        <div><a href="views/produto.php">NOVO PRODUTO</a></div>
        </section>

    <section id="Contact"></section>

    <div id="FLEXITEN">
    <section id="POP2">
        <?php require ("../php/Conexao.php"); ?>
        <section id="Contact2">Login</section>
        <form action="../php/realizar_login.php" method="post">
        <div><input  type="text" placeholder="Username" id="Input-Email" name="username"></div>
        <div><input  type="password" placeholder="Senha" id="Input-Email" name="senha"></div>
        <section><a href="#" class="button">Log in</a></section>
        </form>
    </section>
    <section id="POP">
        <?php require ("../php/Conexao.php"); ?>
        <section id="Contact2">Registrar</section>
        <form action="../php/registro.php" method="post">
        <div><input  type="text" placeholder="Username" id="Input-Email" name="username"></div>
        <div><input  type="email" placeholder="Email" id="Input-Email" name="email"></div>
        <div><input  type="password" placeholder="Senha" id="Input-Email" name="senha"></div>
        <button type="submit">Log in</button>
        </form>
    </section>
</div>

<script>
    const themeToggle = document.getElementById('Tema');
    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
</script>

</body>
</html>