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
            gap: 20px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .nav a:hover {
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
        <a href="Cadastro Motorista.php">Seja um Motorista</a>
    </nav>
</header>

</body>
</html>
