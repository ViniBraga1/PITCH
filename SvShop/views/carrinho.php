<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SV SHOP</title>
    <link rel="stylesheet" href="../css/carrinho.css"> 
    <link rel="shortcut icon" href="../IMG/SV-removebg-preview.png">
</head>
<body>
    <div class="hover14 column"><a href="../index.html"><figure><img src="../IMG/SV-removebg-preview.png" width="130px"></figure></a></div>
    <header>
        <h1>Carrinho de Compras</h1>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="item-details">
                    <span>Longsleeve HIGH Cellphone</span>
                    <br>
                    <span>Tamanho: M</span>
                </div>
                <span class="item-price">R$199,90</span>
            </li>
            <li class="cart-item">
                <div class="item-details">
                    <span>Camiseta Sufgang SufYang</span>
                    <br>
                    <span>Tamanho: M</span>
                </div>
                <span class="item-price">R$199,90</span>
            </li>
            
        </ul>
        <div class="total">
            <p>Total: R$399,80</p>
            <button id="finalizar-compra">Finalizar Compra</button>
        </div>
    

    <section id="QuadPreto">
        <img src="../IMG/SV-removebg-preview.png" width="240px">
    </section>

    <script>
        document.getElementById("finalizar-compra").addEventListener("click", function() {
            window.location.href = "../php/forma_pagamento.php";
        });
    </script>

</body>
</html>