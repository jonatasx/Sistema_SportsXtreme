<!DOCTYPE html>
<?php
session_start();
include_once './webcomplementos.html';
$idusuario = $_SESSION["idusuario"];
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
                    Cadastro de Curso
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
                    }
                    ?>
                </div>
            </div>
            <form action="../controller/cadastrarCursoController.php" method="post">
                <input type="hidden" name="idusuario"  value="<?php echo $idusuario ?>">
                <div class="card-group">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="senha"/>Curso</label>
                            <input type="text" name="curso"  id="senha" class="form-control col-6">
                            <label for="senha"/>Data Inicio</label>
                            <input type="date" name="datainicio"  id="senha" class="form-control col-6" >
                            <label for="senha"/>Data Fim</label>
                            <input type="date" name="datafim"  id="senha" class="form-control col-6" >
                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="senha"/>Vagas</label>
                            <input type="number" name="vagas"  id="senha" class="form-control col-2" >
                            <br>
                            <input type="submit" value="Cadastrar" class="btn btn-danger login_btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>