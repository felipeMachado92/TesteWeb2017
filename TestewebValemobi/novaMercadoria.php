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
        <title>Nova Mercadoria</title>
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
                                Teste Web 2017
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Cadastrar Negociação</a></li>
                            <li><a href="#">Nova Mercadoria</a></li>
                            <li><a href="listaNegociacoes.php">Histórico de Transação</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="container principal">
                    <section>
                        <form name="form" action="" method="post" >
                            <h3>Nova Mercadoria</h3>
                            <label>Código da mercadoria</label><br>
                            <input type="number" min="1" class=" form-control input-sm" name="cdMercdoria"><br>

                            <label>Tipo da mercadoria</label><br>
                            <input type="text" class=" form-control input-sm" name="tpMercadoria"><br>

                            <label>Nome da mercadoria</label><br>
                            <input type="text" class=" form-control input-sm" name="nmMercadoria"><br>

                            <label>Preço</label><br>
                            <input type="text" class=" form-control input-sm" name="vlMercadoria" onkeypress="return Onlynumbers(event)"><br>

                            <center><input type="submit"  class="btn btn-default salvar" value="Salvar" name="btSalvar"></center>
                        </form>
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
