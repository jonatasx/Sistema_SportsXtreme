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
            <div class="card bg-dark text-white">
                <div class="card-body">
                    Cadastro de Aluno no Curso
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <form action="../controller/cadastrarnoCursocontroller.php" method="post">

                <div class="card-group">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="perfil"/>Curso</label>
                            <select class="form-control col-4" name="idcurso" >
                                <option selected="">Selecione</option>
                                <?php
                                require_once '../dao/cursoDAO.php';
                                $cursoDAO = new cursoDAO();
                                $cursos = $cursoDAO->getAllCursoParaCadastro();

                                foreach ($cursos as $p) {
                                    echo "<option value='{$p["idcurso"]}'>Curso:{$p["curso"]} | Vagas: {$p["vagas"]}</option>";
                                }
                                ?>
                            </select>
                            <label for="perfil"/>Aluno</label>
                            <select class="form-control col-4" name="idusuario" >
                                <option selected="">Selecione</option>
                                <?php
                                require_once '../dao/UsuarioDAO.php';
                                $UsuarioDAO = new UsuarioDAO();
                                $Aluno = $UsuarioDAO->getAllAluno();

                                foreach ($Aluno as $a) {
                                    echo "<option value='{$a["idusuario"]}'>{$a["nomecompleto"]}</option>";
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="senha"/>Data Incrição</label>
                            <input type="date" name="datadainscricao"  id="senha" class="form-control col-6" >

                            <label for="senha"/>Mensagem</label>
                            <textarea type="text" name="mensagem"  id="senha" class="form-control col-8" >
                            </textarea>
                        <br>
                            <input type="submit" value="Cadastrar" class="btn btn-danger float-right">
                        </div>
                    </div>
                </div> 
            </form>
        </div>  
</body>
</html>