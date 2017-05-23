<?php
$ocasiao = $_POST['ocasiao'];
$mercado = $_POST['mercado'];
?>
<div class="ui container" style="padding-top: 20px">
    <div class="ui form">
        <div class="ui grid">
            <div class="sixteen wide field">
                <label>Tipo</label>
                <select class="ui fluid dropdown disabled">
                    <?php
                    if ($ocasiao == 'compra') {
                        echo "<option value=\"{$ocasiao}\">Estou Comprando</option>";
                    } elseif ($ocasiao == 'cotacao') {
                        echo "<option value=\"{$ocasiao}\">Apenas Cotando</option>";
                    } else {
                        echo "<option value=\"\"> - selecione - </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="sixteen wide field">
                <label>Mercado</label>
                <select class="ui fluid dropdown disabled">
                    <?php
                    switch ($mercado) {
                        case 'tropical':
                            echo "<option value=\"{$mercado}\">Super Mercados Tropical</option>";
                            break;
                        case 'assai':
                            echo "<option value=\"{$mercado}\">Assai Atacadista</option>";
                            break;
                        case 'big master':
                            echo "<option value=\"{$mercado}\">Super Mercado Big Master</option>";
                            break;
                        case 'atacadao':
                            echo "<option value=\"{$mercado}\">Atacadão Atacadista</option>";
                        default:
                            echo "<option value=\"\"> - selecione - </option>";
                    }
                    ?>
                </select>
            </div>
            <!-- Chamar um Modal -->
            <div class="sixteen wide field">
                <div align="right">
                    <button class="ui green button">Adicionar Item</button>
                </div>
            </div>
            <div class="sixteen wide field">
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
</div>