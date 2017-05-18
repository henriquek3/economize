<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../vendor/semantic/ui/dist/semantic.css">
    <title>Usuário</title>
</head>
<body>
<div class="ui three top attached buttons">
    <div class="ui green icon button">
        <i class="large setting icon"></i>
    </div>
    <div class="ui green icon button">
        <i class="large home icon"></i>
    </div>
    <div class="ui green icon button">
        <i class="shopping basket icon"></i>
    </div>
</div>


<div class="ui green bottom fixed two item inverted menu">
    <a href="#" class="item">
        <i class="shop icon"></i>
        Lista
    </a>
    <a href="#" class="item">
        <i class="bar chart icon"></i>
        Consultar
    </a>
</div>


<div class="ui sidebar vertical menu">
    <div class="item" style="background-color: #16ab39">
        <img class="ui tiny avatar image" src="https://semantic-ui.com/images/avatar2/large/molly.png">
        <span style="color: white;font: 'Roboto Bk';font-size: large">Username</span>
    </div>
    <div class="item">
        <div class="header">Produtos</div>
        <div class="menu">
            <a class="item">Novo Produto</a>
            <a class="item">Marca</a>
            <a class="item">Quantidade</a>
            <a class="item">Medidas</a>
        </div>
    </div>
    <div class="item">
        <div class="header">Estabelecimento</div>
        <div class="menu">
            <a class="item">Novo Estabelecimento</a>
        </div>
    </div>
    <div class="item">
        <div class="header">Configurações</div>
        <div class="menu">
            <a class="item">Salvar informações</a>
            <a class="item">Enviar por e-mail</a>
        </div>
    </div>
    <div class="item">
        <div class="header">Supporte</div>
        <div class="menu">
            <a class="item">E-mail Support</a>
            <a class="item">FAQs</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="../vendor/semantic/ui/dist/semantic.js"></script>
<script>
    $('.ui.sidebar').first()
        .sidebar('attach events', '.button', 'show')
    ;
    $('.button')
        .removeClass('disable')
    ;
</script>
</body>
</html>