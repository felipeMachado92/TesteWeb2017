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
    </head>
    <body>
        <form method="post" name="form" action="">
            <label>Código da mercadoria</label><br>
            <input type="number" min="1" name="cdMercadoria" value="<?= isset($pesq['cd_mercadoria'])?$pesq['cd_mercadoria']:" "?>">
            
            <input type="submit" value="Pesquisar" name="btPesquisar"  onclick="Enviar(0)"><br>
            
            <label>Tipo da mercadoria</label><br>
            <input type="text" name="tpMercadoria" value="<?= isset($pesq['tp_mercadoria'])?$pesq['tp_mercadoria']:" "?>" readonly><br>

            <label>Nome da mercadoria</label><br>
            <input type="text" name="nmMercadoria" value="<?= isset($pesq['nm_mercadoria'])?$pesq['nm_mercadoria']:" "?>" readonly><br>
            
            <label>Preço</label><br>
            <input  type="text" name="vlMercadoria" value="<?= isset($pesq['vl_mercadoria'])?$pesq['vl_mercadoria']:"00.00 "?>" readonly><br>
            
            <label>Quantidade da mercadoria</label><br>
            <input  type="number" min="1" name="qtdMercadoria" onchange="calculaTotal()"><br>
            
            <label>Valor Total</label><br>
            <input type="text" name="vlNegociacao" readonly><br>
            
            <label>Tipo de negócio</label><br>
            <select class="form-control" name="tpNegociacao">
                <option value="compra">Compra</option>
                <option value="venda">Venda</option>
            </select><br>
            
            <input type="submit" value="Salvar" name="btSalvar" onclick="Enviar(1)">
        </form>
    </body>
</html>
