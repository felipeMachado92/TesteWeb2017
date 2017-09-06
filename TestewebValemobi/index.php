<!DOCTYPE html>
<!--
    Página inicial onde o usuário poderá cadastrar nova negociação
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function Enviar(opt){
                if(opt == 1){
                    document.form.action = "conecta.php"
                } else if (opt == 0 ){
                    document.form.action = "novaMercadoria.php"
                }
            }
        </script>
    </head>
    <body>
        <form method="get" name="form" action="">
            <label>ID da mercadoria</label><br>
            <input type="number" min="1" name="id">
            
            <input type="submit" value="Pesquisar" onclick="Enviar(0)"><br>
            
            <label>Quantidade da mercadoria</label><br>
            <input type="number" min="1" name="quantidade"><br>
            
            <label>Valor Total</label><br>
            <input type="text" name="total"><br>
            
            <label>Tipo de negócio</label><br>
            <select class="form-control" name="tipoNeg">
                <option value="compra">Compra</option>
                <option value="venda">Venda</option>
            </select><br>
            
            <input type="submit" value="Salvar" onclick="Enviar(1)">
        </form>
    </body>
</html>
