<!DOCTYPE html>
<?php
session_start();
include_once './webcomplementos.html';
require_once '../dao/cursoDAO.php';
$idcurso = $_GET["idcurso"];

$cursoDAO = new cursoDAO();
$cursos = $cursoDAO->getCursoId($idcurso);
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
                    Editar Curso
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-primary'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <form action="../controller/alterarUsuarioCursoController.php" method="post">
                <input type="hidden" name="idcurso"  value="<?php echo $idcurso ?>">

                <div class="card-group">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="senha"/>Curso</label>
                            <input type="text" name="curso"  id="senha" class="form-control col-6" value="<?php echo $cursos["curso"] ?>">
                            <label for="senha"/>Data Inicio</label>
                            <input type="date" name="datainicio"  id="senha" class="form-control col-6" value="<?php echo $cursos["datainicio"] ?>">

                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="senha"/>Data Fim</label>
                            <input type="date" name="datafim"  id="senha" class="form-control col-6" value="<?php echo $cursos["datafim"] ?>">
                            <label for="senha"/>Vagas</label>
                            <input type="number" name="vagas"  id="senha" class="form-control col-2" value="<?php echo $cursos["vagas"] ?>">
                            <br>
                            <a href="listarAllCursos.php" class="btn btn-warning float-left">Voltar</a>
                            <input type="submit" value="Editar" class="btn btn-danger float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>  
    </body>
</html>