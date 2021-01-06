<!DOCTYPE html>
<?php
session_start();
include_once './webcomplementos.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/logoprojeto.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Extreme Esportes Radicais</title>
    </head>
    <body>
        <div class="container">
            <br>
            <div class="card bg-dark text-white" style="width: 100%; height:100%;">
                <div class="card-body">Criar Post
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <div class="card bg-light text-dark font-weight-bold text-upppercase" style="width: 100%; height:100%;">
                <div class="card-body">
                    <form action="../controller/formCriarPost.php" method="post">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <table>
                                <tr>
                                    <td> <label for="email">Nome do curso:</label> </td>
                                    <td><input type="text" class="form-control mb-2 mr-sm-2" name="curso" size="50"/></td>
                                </tr>
                                <tr>

                                    <td><label for="CPF"> Preço: </label></td>
                                    <td><input type="text" class="form-control mb-2 mr-sm-2" name="preco"/></td>
                                </tr>                

                                <td><label for="CPF"> Estado:</td>
                                <td><input type="text" size="40" class="form-control mb-2 mr-sm-2" name="estado"/></td>
                                </tr> 
                                <td><label for="CPF"> Cidade:</td>
                                <td><input type="text" size="40" class="form-control mb-2 mr-sm-2" name="cidade"/></td>
                                </tr>    
                                <tr>
                                    <td>Descrição:</td>
                                    <td><textarea size='60' name='40' name='mensagem' cols="48" rows="18"></textarea></td>
                                    <td colspan="2"><input type="submit" value="Criar Post" class="btn btn-danger login_btn"/></td>
                                </tr>
                                </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>

