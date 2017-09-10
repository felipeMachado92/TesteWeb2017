<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Histórico de negociações</title>
        <link rel="stylesheet" type="text/css" href="bootstrap\bootstrap-3.3.7-dist\css\bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <header>
                <nav class="navbar navbar-inverse ">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                Teste Web 2017
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Cadastrar Negociação</a></li>
                            <li><a href="novaMercadoria.php">Nova Mercadoria</a></li>
                            <li><a href="l#">Histórico de Transação</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <main>
            <center><h3 class="fundo-branco">Histórico de Transação</h3></center>
            <div class="container-fluid">
                <div class="container">
                    <section>
                        <table class="table">
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
                    </section>
                </div>
            </div>
        </main>
        <footer class="fixo">
                <div class="footer-copyright">
                    <div class="container">
                        <center><p>Desenvolvido por Felipe Machado</p></center>
                    </div>
                </div>
            </footer>
    </body>
</html>
