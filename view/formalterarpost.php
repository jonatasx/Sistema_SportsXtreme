<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
require_once '../dao/postDAO.php';

$idpost = $_GET["id"];
$curso = $_GET["curso"];
//echo $idpost;
//exit();
$postDAO = new postDAO();
$post = $postDAO->getpostById($idpost);
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
                    Aterar post
                </div>
            </div>
            <form  action="../controller/alterarpostController.php" method="post">
                <input type="hidden" class="form-control col-6" name="idpost" value="<?php echo $idpost ?>" readonly="">
                <div class="card-group">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="name">Nome de Curso:</label>
                            <input type="text" class="form-control col-6" name="curso" size="50" value="<?php echo $curso ?>" readonly="">
                            <label for="text"> Preço: </label>
                            <input type="text" class="form-control col-6" name="preco" value="<?php echo $post["preco"] ?>">
                            <label for="Estado"> Estado: </label>
                            <input type="text" class="form-control col-6" name="estado" value="<?php echo $post["estado"] ?>">
                            <label for="Estado"> Cidade: </label>
                            <input type="text" class="form-control col-6" name="cidade" value="<?php echo $post["cidade"] ?>">
                        </div>
                    </div>
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <label for="Descricao"> Descrição:</label>
                            <textarea  class="form-control" name="mensagem"><?php echo $post["mensagem"] ?></textarea>
                            <br>
                            <input type="submit" value="Alterar post" class="btn btn-danger float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>