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

    <button class="ui green button">Modal</button>

    <div class="ui modal">
        <i class="close icon"></i>
        <div class="header">Adicionar Item</div>
        <div class="content">
            <form class="ui form" method="post" action="#" style="padding-top: 15px">
                <div class="ui grid">
                    <div class="sixteen wide field">
                        <label>Produto</label>
                        <select class="ui search dropdown">
                            <option></option>
                            <option value="1">Arroz</option>
                            <option value="2">Feijão</option>
                            <option value="3">Açucar</option>
                            <option value="4">Sal</option>
                            <option value="5">Carne</option>
                            <option value="5">Nescau</option>
                            <option value="5">Bolacha</option>
                        </select>
                    </div>

                    <div class="sixteen wide field disabled">
                        <label>Marca</label>
                        <select class="ui fluid dropdown">
                            <option></option>
                            <option value="1">Nestlè</option>
                            <option value="2">Zaeli</option>
                        </select>
                    </div>

                    <div class="eight wide field disabled">
                        <label>Peso/Volume</label>
                        <input type="number" name="">
                    </div>
                    <div class="eight wide field disabled">
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
                        <input type="number" name="">
                    </div>

                    <div class="eight wide field">
                        <label>Valor R$</label>
                        <input type="number" name="nome-produto">
                    </div>


                    <div class="sixteen wide field actions" style="padding-top: 10px" align="center">
                        <button class="ui button" type="reset">Limpar</button>
                        <button class="ui primary button" type="submit">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="../../vendor/semantic/ui/dist/semantic.js"></script>
<script>
    $('select.dropdown')
        .dropdown()
    ;
    $('.modal')
        .modal('attach events', '.button', 'show')
    ;
</script>
</body>
</html>