<!DOCTYPE html>
<!--
Página onde o usuário poderá cadastrar nova mercadoria
-->
<?php 
     require_once 'classes/Mercadoria.class.php';
     
     $merc = new Mercadoria();
     
     if(isset($_POST['btSalvar'])) {
         if($merc->queryInsert($_POST) == 'ok'){
             header('location:index.php');
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
        <form name="form" action="" method="post" >
            <label>Código da mercadoria</label><br>
            <input type="number" min="1" name="cdMercdoria"><br>

            <label>Tipo da mercadoria</label><br>
            <input type="text" name="tpMercadoria"><br>

            <label>Nome da mercadoria</label><br>
            <input type="text" name="nmMercadoria"><br>
            
            <label>Preço</label><br>
            <input type="text" name="vlMercadoria" onkeypress="return Onlynumbers(event)"><br>
            
            <input type="submit" value="Salvar" name="btSalvar">
        </form>
    </body>
</html>
