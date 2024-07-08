<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="shop.css"> 
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
        </a></div></section>

    <section id="hehe"></section>
    <section id="GRIDProd">
        <div id="Roupa1" class="item" data-id="1">
            <section>Camiseta Sufgang</section>
            <section>000Psy</section>
            <section id="I2">199,90</section>
            <button class="add-to-cart">Adicionar ao carrinho</button>
        </div>
        <div id="Roupa2" class="item" data-id="2">
            <section>Camiseta Sufgang</section>
            <section>SufYang</section>
            <section id="I2">199,90</section>
            <button class="add-to-cart">Adicionar ao carrinho</button>
        </div>
        <div id="Roupa6" class="item" data-id="3">
            <section>Rain Jacket HIGH</section>
            <section>Chameleon Orange</section>
            <section id="I2">199,90</section>
            <button class="add-to-cart">Adicionar ao carrinho</button>
        </div>
    </section>
    <section id="GRIDProd">
        <div id="Roupa3" class="item" data-id="4">
            <section>Camiseta Sufgang</section>
            <section>SUFKIDZ</section>
            <section id="I2">199,90</section>
            <button class="add-to-cart">Adicionar ao carrinho</button>
        </div>
        <div id="Roupa4" class="item" data-id="5">
            <section>Longsleeve HIGH</section>
            <section>Cellphone</section>
            <section id="I2">199,90</section>
            <button class="add-to-cart">Adicionar ao carrinho</button>
        </div>
        <div id="Roupa5" class="item" data-id="6">
            <section>Camiseta HIGH</section>
            <section>Wildstyle</section>
            <section id="I2">189,90</section>
            <button class="add-to-cart">Adicionar ao carrinho</button>
        </div>
    </section>

    <script>
        const themeToggle = document.getElementById('Tema');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const itemElement = this.closest('.item');
                const itemId = itemElement.getAttribute('data-id');
                
                fetch('add_to_cart.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ id: itemId })
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        alert('Item adicionado ao carrinho com sucesso!');
                    } else {
                        alert('Falha ao adicionar o item ao carrinho.');
                    }
                });
            });
        });
    </script>
    
</body>
</html>
