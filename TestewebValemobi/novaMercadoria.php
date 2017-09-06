<!DOCTYPE html>
<!--
Página onde o usuário poderá cadastrar nova mercadoria
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <label>ID da mercadoria</label><br>
            <input type="number" min="1" name="id"><br>

            <label>Tipo da mercadoria</label><br>
            <input type="text" name="tipoMerc"><br>

            <label>Nome da mercadoria</label><br>
            <input type="text" name="nome"><br>
            
            <label>Preço</label><br>
            <input type="text" name="preco"><br>
            
            <input class="btn btn-default" type="submit" value="Salvar">
        </form>
    </body>
</html>
