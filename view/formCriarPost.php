<!DOCTYPE html>
<?php
session_start(); 
$idUsuario = $_SESSION["idusuario"];

//echo "usuario:" . $idUsuario;
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
            <div class="card bg-dark text-white">
                <div class="card-body">
                    Cadastro de Post
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <form action="../controller/cadastrarPostController.php"  method="post">
                <div class="card-group">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="email">Curso:</label>
                            <select class="form-control col-6" name="curso_idcurso">
                                <option selected="">Selecione</option>
                                <?php
                                require_once '../dao/cursoDAO.php';
                                $cursoDAO = new cursoDAO();
                                $Curso = $cursoDAO->getAllCurso();

                                foreach ($Curso as $C) {
                                    echo "<option value='{$C["idcurso"]}'>{$C["curso"]}</option>";
                                }
                                ?>
                            </select>
                            <label for="perfil"/>Professor</label>
                            <select class="form-control col-6" name="usuario_idusuario" >
                                <option selected="">Selecione</option>
                                <?php
                                require_once '../dao/UsuarioDAO.php';
                                $UsuarioDAO = new UsuarioDAO();
                                $Professor = $UsuarioDAO->getAllProfessor();

                                foreach ($Professor as $pr) {
                                    echo "<option value='{$pr["idusuario"]}'>{$pr["nomecompleto"]}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label for="preco"> Preço: </label>
                            <input type="text" class="form-control col-6" name="preco"/>

                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="CPF"> Estado:</label>
                            <input type="text" size="40" class="form-control col-10" name="estado">
                            <label for="CPF"> Cidade:</label>
                            <input type="text" size="40" class="form-control col-10" name="cidade">
                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="mensagem"> Mensagem: </label>
                            <textarea type="text" size='50' name="mensagem"  id="senha"  cols="40" rows="5" class="form-control"></textarea>
                            <br>
                            <input type="submit" value="Criar Post" class="btn btn-danger float-right">
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </body>
</html>
