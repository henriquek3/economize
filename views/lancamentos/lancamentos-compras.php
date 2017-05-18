<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 15/05/2017
 * Time: 20:24
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../vendor/semantic/ui/dist/semantic.css">
    <title>Usuário</title>
</head>
<body>

<div class="ui container" style="padding-top: 50px">

    <h3 class="ui dividing centered aligned header">Adicionar Item</h3>
    <form class="ui form" method="post" action="../../controllers/CUsuarios.php" style="padding-top: 15px">

        <div class="ui grid">
            <div class="sixteen wide field">
                <label>Produto</label>
                <input type="text" name="nome-produto">
            </div>

            <div class="sixteen wide field">
                <label>Marca</label>
                <select class="ui fluid dropdown">
                    <option></option>
                    <option value="1">Nestlè</option>
                    <option value="2">Zaeli</option>
                </select>
            </div>

            <div class="eight wide field">
                <label>Peso/Volume</label>
                <input type="number" name="">
            </div>
            <div class="eight wide field">
                <label>Unidade de Medida</label>
                <select class="ui fluid dropdown">
                    <option></option>
                    <option value="1">Mg</option>
                    <option value="2">Gramas</option>
                    <option value="3">Kg</option>
                    <option value="4">Ml</option>
                    <option value="5">Litros</option>
                </select>
            </div>

            <div class="eight wide field">
                <label>Quantidade</label>
                <select class="ui fluid dropdown">
                    <option></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <div class="eight wide field">
                <label>Valor R$</label>
                <input type="number" name="nome-produto">
            </div>

            <div class="sixteen wide field" style="padding-top: 10px" align="center">
                <button class="ui button" type="reset">Limpar</button>
                <button class="ui primary button" type="submit">Adicionar</button>
            </div>
        </div>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="../../vendor/semantic/ui/dist/semantic.js"></script>
<script>
    $('select.dropdown')
        .dropdown()
    ;
</script>
</body>
</html>