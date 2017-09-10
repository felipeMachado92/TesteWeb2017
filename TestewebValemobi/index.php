<!DOCTYPE html>
<!--
    Página inicial onde o usuário poderá cadastrar nova negociação
-->
<?php
    require_once 'classes/Conecta.class.php';
    require_once 'classes/Mercadoria.class.php';
    require_once 'classes/Negociacao.class.php';
    
    $merc = new Mercadoria();
    $neg = new Negociacao();
    
    if(isset($_POST['cdMercadoria'])){
        $pesq = $merc->querySeleciona($_POST['cdMercadoria']);
    }
    
    if(isset($_POST['btSalvar'])) {
         if($neg->queryInsert($_POST) == 'ok'){
             header('location:listaNegociacoes.php');
         } else {
             echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
         }
     }
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="javascript/validaoes.js"></script>
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
                                Shop More
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Cadastrar Negociação</a></li>
                            <li><a href="novaMercadoria.php">Nova Mercadoria</a></li>
                            <li><a href="listaNegociacoes.php">Histórico de Transação</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <main>
            <div class="container-fluid" >
                <div class="container principal ">
                    <section>
                        <form method="post" name="form" action="">
                            <center><label>Código da mercadoria</label><br></center>
                            <center><input type="number" min="1" name="cdMercadoria"   value="<?= isset($pesq['cd_mercadoria'])?$pesq['cd_mercadoria']:" "?>">

                            <input type="submit" class="btn btn-default btn-pesquisar" value="Pesquisar" name="btPesquisar"  onclick="Enviar(0)"><br></center>

                            <label>Tipo da mercadoria</label><br>
                            <input type="text" name="tpMercadoria" class=" form-control input-sm" value="<?= isset($pesq['tp_mercadoria'])?$pesq['tp_mercadoria']:" "?>" readonly><br>

                            <label>Nome da mercadoria</label><br>
                            <input type="text" name="nmMercadoria" class=" form-control input-sm" value="<?= isset($pesq['nm_mercadoria'])?$pesq['nm_mercadoria']:" "?>" readonly><br>

                            <label>Preço</label><br>
                            <input  type="text" name="vlMercadoria" class=" form-control input-sm" value="<?= isset($pesq['vl_mercadoria'])?$pesq['vl_mercadoria']:"00.00 "?>" readonly><br>

                            <label>Quantidade da mercadoria</label><br>
                            <input  type="number" min="1" name="qtdMercadoria" class=" form-control input-sm"  onchange="calculaTotal()"><br>

                            <label>Valor Total</label><br>
                            <input type="text" class=" form-control input-sm" name="vlNegociacao" readonly><br>

                            <label>Tipo de negócio</label><br>
                            <select class="form-control" name="tpNegociacao">
                                <option value="compra">Compra</option>
                                <option value="venda">Venda</option>
                            </select><br>

                            <center><input type="submit" class="btn btn-default salvar" value="Salvar" name="btSalvar" onclick="Enviar(1)"></center>
                        </form>
                    </section>
                </div>
            </div>
        </main>
    </body>
</html>
