<!DOCTYPE html>
<?php
session_start();
include_once './webcomplementos.html';
require_once '../dao/UsuarioDAO.php';
include '../js/funcaoData.php';
$idusuario = $_SESSION["idusuario"];

$UsuarioDAO = new UsuarioDAO();
$usuario = $UsuarioDAO->getusuarioById($idusuario);
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
            <div class="card bg-dark text-white">
                <div class="card-body">Editar Cadasatro</div>
            </div>
            <form action="../controller/alterarUsuarioAlunoController.php" method="post">
                <div class="card-group">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <input type="hidden" name="idusuario"  value="<?php echo $usuario["idusuario"] ?>">
                            <label for="senha"/>Nome</label>
                            <input type="text" name="nomecompleto"  id="senha" class="form-control col-6" value="<?php echo $usuario["nomecompleto"] ?>">
                            <label for="senha"/>Email</label>
                            <input type="text" name="email"  id="senha" class="form-control col-6" value="<?php echo $usuario["email"] ?>">

                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="tex"/>Estado</label>
                            <input type="text" name="estado"  id="senha" class="form-control col-6" value="<?php echo $usuario["estado"] ?>">
                            <label for="senha"/>Data de Nascimento</label>
                            <input type="date" name="datadenascinmento"  id="senha" class="form-control col-6" value="<?php echo $usuario["datadenascimento"] ?>">
                            <br>
                            <br>
                            <input type="submit" value="Editar Cadastro" class="btn btn-primary login_btn"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>  
    </body>
</html>