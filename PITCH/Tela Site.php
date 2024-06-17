<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Motoristas</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #333;
            padding: 10px 20px;
        }
        .header .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        .nav {
            display: flex;
            gap: 10px; /* Ajuste o espaçamento entre os itens do menu */
        }
        .nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px; /* Ajuste o espaçamento interno dos itens do menu */
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .menu-tab {
            display: flex;
            align-items: center;
            gap: 20px;
            cursor: pointer;
            padding: 10px;
            background-color: #555;
            border-radius: 5px;
            position: relative; /* Adicionado para posicionar o submenu */
        }
        .menu-tab img {
            width: 40px; /* Ajuste o tamanho do ícone conforme necessário */
            height: auto;
        }
        .menu-tab ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            position: absolute;
            background-color: #555;
            z-index: 1;
            border-radius: 5px;
            display: none;
            right: 0; /* Ajusta o posicionamento do submenu */
        }
        .menu-tab:hover ul {
            display: block;
        }
        .menu-tab ul li {
            padding: 10px;
        }
        .menu-tab ul li a {
            color: white;
            text-decoration: none;
        }
        .menu-tab ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="logo"><img src="TRIPSHARE.png" alt=""></div>
    <nav class="nav">
        <a href="Motoristas.php">Motoristas</a>
        <a href="Sobre.php">Quem Somos?</a>
        <a href="Cadastro Cartao.php">Adicionar Cartão</a>
        <a href="Cadastro Motorista.php">Seja um Motorista</a>
    </nav>
    <div class="menu-tab">
        <img src="usuario.png">
        <ul>
            <li><a href="Ver Cliente.php">Ver</a></li>
            <li><a href="Index.php">Sair</a></li>
        </ul>
    </div>
</header>

</body>
</html>
