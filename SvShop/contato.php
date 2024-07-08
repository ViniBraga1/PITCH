<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="contato.css"> 
    <link rel="shortcut icon" href="/IMG/SV-removebg-preview.png"> 
</head>
<body>
    <section id="RodaPeInicial">
        <div><button id="Tema">TEMA</button></div>
        <div class="hover14 column"><a href="index.html"><figure><img src="/IMG/SV-removebg-preview.png" width="130px"></figure></a></div><div></div>
        <div><a href="shop.html">SHOP</a></div>
        <a href="drop.html"><div>DROP</div></a>
        <div><a href="contato.html">CONTATO</a></div>
        <div><a href="login.html"><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></span>
        </a></div>    
    </section>

    <section id="Contact">Entre em Contato!</section>

    <section id="POP">
        <div><input  type="email" placeholder="Nome" id="Input-Email"></div>
        <div><input  type="email" placeholder="Email" id="Input-Email"></div>
        <div><input  type="email" placeholder="Assunto" id="Input-Email"></div>
        <div><input  type="email" placeholder="Mensagem" id="Input-Email2"></div>
        <section><a href="#" class="button">Enviar</a></section>
    </section>

    <script>
        const themeToggle = document.getElementById('Tema');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>

</body>
</html>