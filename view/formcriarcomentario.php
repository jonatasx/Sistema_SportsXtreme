<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
?>
<html>
    <head>
      
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/logoprojeto.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Extreme Esportes Radicais</title>
    <table cellspacing="0" align="center">
        <tr>  
            <td> <img src="http://localhost/Sistema_SportsXtreme/imagens/skateboar.jpg" alt="skate" width="540" height="160" </td> 
            <td> <img src="http://localhost/Sistema_SportsXtreme/imagens/base-jump.jpg" alt="bjump" width="540" height="160" </td>
            <td> <img src="http://localhost/Sistema_SportsXtreme/imagens/mountaineer.jpg" alt="Montanhismo" width="540" height="160" </td>
        </tr>     
    </table>        
    <nav class="navbar navbar-expand-sm bg-danger navbar-danger">
        <ul class="navbar-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/Sistema_SportsXtreme/Inicial.php">Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Posts de Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="http://localhost/Sistema_SportsXtreme/index.php">Login/Logout</a>
            </li>
        </ul>
    </nav>
    </head>
    
    <body>
        <div class="form-group">
         <form class="form-inline" action="../controller/cadastrarClienteController.php" method="post">
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
            <table>
                      
                <tr>
                    <td>comentário:</td>
                    <td><textarea size='60' name='40' name='descricao' cols="38" rows="10"></textarea></td>
               
                    <td colspan="2"><input type="submit" value="Fazer Comentário" class="btn btn-danger login_btn"/></td>
                
                    </form>
        </div>
                    <?php
        // put your code here
        ?>
    </body>
</html>
