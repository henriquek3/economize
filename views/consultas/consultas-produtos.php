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

    <form class="ui form" method="post" action="#" style="padding-top: 15px">
        <form class="ui grid">
            <div class="sixteen wide field">
                <label>Tipo</label>
                <select class="ui fluid dropdown disabled">
                    <option></option>
                    <option value="1" selected>Compra</option>
                </select>
            </div>
            <div class="sixteen wide field">
                <label>Mercado</label>
                <select class="ui fluid dropdown disabled">
                    <option></option>
                    <option value="1" selected>Tropical Supermercados</option>
                </select>
            </div>
            <!-- Chamar um Modal -->
            <button class="ui basic button">Adicionar Item | MODAL</button>
        </form>

<div class="fields">
    <div class="sixteen wide column">
        <table class="ui green celled unstackable table">
            <thead>
            <tr>
                <th>Produto</th>
                <th class="center aligned">Qtde</th>
                <th class="center aligned">Vl Un.</th>
                <th class="center aligned">Vl Tl.</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Nescau</td>
                <td class="center aligned">2</td>
                <td class="center aligned">8.00</td>
                <td class="center aligned">16.00</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th>Total R$</th>
                <th>16.00</th>
            </tr>
            </tfoot>
        </table>
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
</script>
</body>
</html>