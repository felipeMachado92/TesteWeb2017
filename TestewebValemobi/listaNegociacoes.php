<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border = 1>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Valor unitário</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>Desc Negócio</th>
            </tr>
            <?php 
                require_once 'classes/Conecta.class.php';
                require_once 'classes/Mercadoria.class.php';
                require_once 'classes/Negociacao.class.php';
                $neg = new Negociacao();
                foreach ($neg->querySelect() as $pesq) {
            ?>
            <tr>
                <td><?= $pesq['cd_mercadoria']?></td>
                <td><?= $pesq['nm_mercadoria']?></td>
                <td><?= $pesq['tp_mercadoria']?></td>
                <td><?= $pesq['vl_mercadoria']?></td>
                <td><?= $pesq['qtd_mercadoria']?></td>
                <td><?= $pesq['vl_total']?></td>
                <td><?= $pesq['tp_negociacao']?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
