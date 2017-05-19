<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 15/05/2017
 * Time: 20:22
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../../vendor/semantic/ui/dist/semantic.css">
    <title>Usuário</title>
</head>
<body>

<div class="ui green top fixed four item inverted menu">
    <a href="cadastros-usuarios.php" class="item active">Usuario</a>
    <a href="cadastros-mercados.php" class="item">Mercado</a>
    <a href="cadastros-produtos.php" class="item">Produto</a>
    <a href="cadastros-marcas.php" class="item">Marcas</a>
</div>
<div class="ui container" style="padding-top: 10px">
    <form class="ui form" method="post" action="../../controllers/users.php">
        <h4 class="ui dividing header">Cadastro de Usuário</h4>
        <div class="fields">
            <div class="sixteen wide field">
                <label>Primeiro Nome</label>
                <input type="text" name="first-name">
            </div>
        </div>
        <div class="fields">
            <div class="sixteen wide field">
                <label>Segundo Nome</label>
                <input type="text" name="second-name">
            </div>
        </div>
        <div class="fields">
            <div class="sixteen wide field">
                <label>E-mail</label>
                <input type="email" name="email">
            </div>
        </div>
        <div class="fields">
            <div class="sixteen wide field">
                <label>Senha</label>
                <input type="password" name="password">
            </div>
        </div>
        <div class="fields">
            <div class="sixteen wide field" style="padding-top: 10px" align="center">
                <button class="ui button" type="reset">Limpar</button>
                <button class="ui primary button" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</div>
<div class="ui green bottom fixed two item inverted menu">
    <a href="#" class="item">Comprar</a>
    <a href="#" class="item">Consultar</a>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="../../../vendor/semantic/ui/dist/semantic.js"></script>
<script>
    $('select.dropdown')
        .dropdown()
    ;
</script>
</body>
</html>
