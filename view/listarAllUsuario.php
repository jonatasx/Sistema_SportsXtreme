<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <div class="container">
            <div class="card text-white" style="background-color: #88d0a8;">
                <div class="card-body">Lista Usuários
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <?php
            require_once '../dao/UsuarioDAO.php';
            include '../js/funcaoData.php';

            $UsuarioDAO = new UsuarioDAO();
            $usuario = $UsuarioDAO->getAllusuario();

            echo "<table class='table table-hover'>";
            echo "<tr>";
            echo "  <th>Nome</th>";
            echo "  <th>Perfil</th>";
            echo "  <th>Excluir</th>";
            echo "  <th>Alterar</th>";
            echo "</tr>";


            foreach ($usuario as $u) {
                $idperfil = $u["idperfil"];
                echo "<tr>";
                echo "  <td>{$u["nomecompleto"]}</td>";
                echo "  <td>{$u["perfil"]}</td>";
                if ($idperfil == 1) {
                    echo "  <td><a href='../controller/excluiruUsuarioByIdController.php?id={$u["idusuario"]}'>Excluir</a></td>";
                    echo "  <td><a href='formAlterarUsuario.php?id={$u["idusuario"]}'>Alterar</a></td>";
                } else {
                    echo "  <td class='text-danger'>Bloqueado</td>";
                    echo "  <td class='text-danger'>Bloqueado</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
            ?>
        </div>
    </body>
</html>
