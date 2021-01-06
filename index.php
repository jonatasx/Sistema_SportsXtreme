<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/logoprojeto.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/cssdologin.css">
        <title>Extreme Esportes Radicais</title>
    </head>
    <body>
        <table cellspacing="0" align="center">
            <tr>  
                <td> <img src="imagens/mountaineer.jpg" alt="Montanhismo" width="540"  class="img-thumbnail"> </td>
                <td> <img src="imagens/skateboar.jpg" alt="skate" width="540" class="img-thumbnail"> </td> 
                <td> <img src="imagens/base-jump.jpg" alt="bjump" width="540"  class="img-thumbnail"> </td>
                <td> <img src="imagens/parkour.jpg" alt="parkour" width="540" class="img-thumbnail"> </td>
            </tr>     
        </table>        
        <nav class="navbar navbar-expand-sm bg-danger navbar-danger">
            <ul class="navbar-nav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postsdecursos.php" target="post">Posts de Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-success" data-toggle="modal" data-target="#myModal"> Entrar com sua Conta</a>
                </li>       
            </ul>
        </nav>
        <div class="container">
            <iframe name="post" src="postsdecursos.php" width="100%" height="80%" frameborder="0" style="margin-top: 100px"></iframe>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex justify-content-center h-100">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 action="view/fromcriarcontaUsuario.php">Criar Conta</h3>
                                        <div class="d-flex justify-content-end social_icon">
                                            <span><i class="fab fa-facebook-square"></i></span>
                                            <span><i class="fab fa-google-plus-square"></i></span>
                                            <span><i class="fab fa-twitter-square"></i></span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="controller/loginController.php" method="post">
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Email" name="email">

                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Senha" name="senha">
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Me lembre a senha
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Entrar" class="btn float-right login_btn">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-center links">
                                            </br><a href="view/fromcriarcontaUsuario.php" ></br>Criar Conta</a><br>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            </br><a href="#">Esqueceu sua senha?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>

                    </div>
                </div>
            </div>
            <center>
                <?php
                if (!empty($_GET["msg"])) {
                    echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
                }
                ?>
            </center>
            <?php
            include './footer.php';
            /* Created by Jônatas Santos Pessôa */
            ?>
        </div>
    </body>
</html>
