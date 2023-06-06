<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Superhero</title>
    <link rel="stylesheet" href="../resource/site/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <!--MENU TOPO-->
    <header class="header-area">
        <nav class="menu-conta container">
            <ul class="menu-conta-dados">
                <li class="cor-1"><a href="#"><img src="../resource/site/assets/icon/user.svg" alt="Usuário">Minha Conta</a></li>
                <li class="cor-1"><a href="#"><img src="../resource/site/assets/icon/heart.svg" alt="Coração">Lista de Desejos</a></li>
                <li class="cor-1"><a href="#"><img src="../resource/site/assets/icon/shopping-cart.svg" alt="Carrinho">Meu Carrinho</a></li>
                <li class="cor-1"><a href="login.html"><img src="../resource/site/assets/icon/lock.svg" alt="Cadeado">Login</a></li>
            </ul>
            <div class="dropdown-geral">
                <div class="dropdown">
                    <a onclick="dropdown()" class="menu-moedas-btn cor-1">Moeda <img src="../resource/site/assets/icon/bxs_down-arrow.svg" alt="seta para baixo"></a>
                    <div id="meuDropdown" class="dropdown-conteudo">
                        <a href="#" class="cor-6">BRL</a>
                        <a href="#" class="cor-6">USD</a>
                      </div>
                </div>
                <div class="dropdown">
                    <a onclick="dropdown2()" class="menu-moedas-btn cor-1">Idioma <img src="../resource/site/assets/icon/bxs_down-arrow.svg" alt="seta para baixo"></a>
                    <div id="meuDropdown2" class="dropdown-conteudo">
                        <a href="#" class="cor-6">Português</a>
                        <a href="#" class="cor-6">Inglês</a>
                        <a href="#" class="cor-6">Espanhol</a>
                      </div>
                </div>
            </div>
        </nav>
    </header>
    
    <!--MENU NAVEGAÇÃO PRINCIPAL-->
    <nav class="menu-site-area">
        <div class="menu-site container">
            <img src="../resource/site/assets/icon/Guitar Superhero.svg" alt="Logo Guitar Superhero">
            <ul class="menu-principal">
                <li class="cor-1"><a href="#">Home</a></li>
                <li class="cor-1"><a href="#">Podutos</a></li>
                <li class="cor-1"><a href="#">Sobre Nós</a></li>
                <li class="cor-1"><a href="#">Contato</a></li>
            </ul>
            <ul class="carrinho-compras">
                <li><a href=""><img src="../resource/site/assets/icon/heart-outline.svg" alt=""></a></li>
                <li class="carrinho-item">
                    <a href="carrinho.html" class="cor-1"><img src="../resource/site/assets/icon/clarity_shopping-cart-line.svg" alt=""> - <span class="cart-amunt">R$100</span></a>
                </li>
            </ul>
        </div>
    </nav>
    
    
