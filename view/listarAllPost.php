<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <div class="container">
            <?php
            session_start();
            include_once './webcomplementos.html';
            $idusuario = $_SESSION["idusuario"];
//echo "<pre>";
//echo $usuario;
//echo "</pre>";
//exit();
            ?>
            <br>
            <div class="card text-white bg-success font-weight-bold text-center">
                <div class="card-body">Meus Posts
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <?php
            require_once '../dao/postDAO.php';
            $postDAO = new postDAO();
            $posts = $postDAO->getAllpost();
            ?>
            <table class='table table-hover table-borderless'>
                <tr>
                    <th>Curso</th> 
                    <th>Preço</th> 
                    <th>Estado</th> 
                    <th>Mensagem</th> 
                    <th>Excluir </th> 
                    <th>Alterar</th> 
                </tr>
                <?php
                foreach ($posts as $p) {
                    echo "<tr>";
                    echo "<td>{$p["curso"]}</td>";
                    echo "<td>{$p["preco"]}</td>";
                    echo "<td>{$p["estado"]}</td>";
                    echo "<td>{$p["mensagem"]}</td>";
                    echo "<td><a href='../controller/excluirPostByIdController.php?id={$p["idpost"]}' onclick=\"return confirm('Tem certeza que deseja Excluir esse Post?'); return false;\">"
                    . "Excluir</a></td>";
                    echo "<td><a href='formalterarpost.php?id={$p["idpost"]}&curso={$p["curso"]}'onclick=\"return confirm('Tem certeza que deseja Editar esse Post?'); return false;\">"
                    . "Alterar</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>