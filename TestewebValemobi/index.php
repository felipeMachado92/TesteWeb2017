<!DOCTYPE html>
<!--
    Página inicial onde o usuário poderá cadastrar nova negociação
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <form method="get" action="gravar.php">
            <label>ID da mercadoria</label><br>
            <input type="number" min="1" name="id">
            
            <input type="button" value="Pesquisar" onclick="pesquisar()"><br>
            
            <label>Quantidade da mercadoria</label><br>
            <input type="number" min="1" name="quantidade"><br>
            
            <label>Valor Total</label><br>
            <input type="text" name="total"><br>
            
            <label>Tipo de negócio</label><br>
            <select class="form-control" name="tipoNeg">
                <option value="compra">Compra</option>
                <option value="venda">Venda</option>
            </select><br>
            
            <input class="btn btn-default" type="submit" value="Salvar">
        </form>
    </body>
</html>
