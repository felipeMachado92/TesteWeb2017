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
    
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function Enviar(opt){
                if(opt == 1){
                    document.form.action = "novaMercadoria.php";
                } else if (opt == 0 ){
                    document.form.action = "index.php";
                }
            }
        </script>
    </head>
    <body>
        <form method="post" name="form" action="">
            <label>Código da mercadoria</label><br>
            <input type="number" min="1" name="cdMercadoria" value="<?= isset($pesq['cd_mercadoria'])?$pesq['cd_mercadoria']:" "?>">
            
            <input type="submit" value="Pesquisar" name="btPesquisar"  onclick="Enviar(0)"><br>
            
            <label>Tipo da mercadoria</label><br>
            <input type="text" name="tipoMerc" value="<?= isset($pesq['tp_mercadoria'])?$pesq['tp_mercadoria']:" "?>" readonly><br>

            <label>Nome da mercadoria</label><br>
            <input type="text" name="nome" value="<?= isset($pesq['nm_mercadoria'])?$pesq['nm_mercadoria']:" "?>" readonly><br>
            
            <label>Preço</label><br>
            <input type="text" name="preco" value="<?= isset($pesq['vl_mercadoria'])?$pesq['vl_mercadoria']:" "?>" readonly><br>
            
            <label>Quantidade da mercadoria</label><br>
            <input type="number" min="1" name="quantidade"><br>
            
            <label>Valor Total</label><br>
            <input type="text" name="total"><br>
            
            <label>Tipo de negócio</label><br>
            <select class="form-control" name="tipoNeg">
                <option value="compra">Compra</option>
                <option value="venda">Venda</option>
            </select><br>
            
            <input type="submit" value="Salvar" name="btSalvar" onclick="Enviar(1)">
        </form>
    </body>
</html>
