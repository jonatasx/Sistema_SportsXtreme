<!DOCTYPE html>
<?php
include_once 'webcomplementos.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form class="form-inline" action="../controller/cadastrarusuarioController.php" method="post">
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
            <table>
                <tr>
                    <td> <label for="email">Nome:</label> </td>
                    <td><input type="text" class="form-control mb-2 mr-sm-2" name="nome" size="50"/></td>
                </tr>
                <tr>
                
                    <td><label for="CPF"> Email: </label></td>
                    <td><input type="email" class="form-control mb-2 mr-sm-2" name="email"/></td>
                </tr>                
                <tr>
                    <td><label for="CPF"> RG: </label></td></td>
                    <td><input type="text" name="rg"/></td>
                </tr>                                
                <tr>
                    <td><label for="CPF"> Data de Nascimento: </label></td>
                    <td><input type="text" name="datanascimento"/></td>
                </tr>                                                
                <tr>
                    <td><label for="sexo"> Sexo: </label></td>
                    <td>
                        Masculino <input type="radio" name="sexo" value="masc"/>
                        Feminino <input type="radio" name="sexo" value="fem"/>
                    </td>
                </tr>                                
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" size="60" name="endereco"/></td>
                </tr>    
                <tr>
                
                    <td><label for="Estado"> Estado: </label></td>
                    <td><input type="text" class="form-control mb-2 mr-sm-2" name="Estado"/></td>
                </tr>
                <tr>                    
                    <td colspan="2">
                        <input type="submit" value="Cadastrar"/>
                    </td>
                </tr>                                                                
            </table>
        </form>
        <center>
            <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>
        </center>
    </body>
</html>
