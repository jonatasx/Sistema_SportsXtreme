<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/UsuarioDAO.php';
        include '../js/funcaoData.php';

        $UsuarioDAO = new UsuarioDAO();
        $usuario = $UsuarioDAO->getAllusuario();

        echo "<table class='table table-hover'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Cpf</th>";
        echo "  <th>Rg</th>";
        echo "  <th>Sexo</th>";
        echo "  <th>Data de Nascimento</th>";
        echo "  <th>endereco</th>";
          echo "  <th>Estado</th>";
            echo "  <th>cidade</th>";
            echo " <th>CNPJ</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";


        foreach ($usuario as $u) {
            echo "<tr>";
            echo "  <td>{$u["nome"]}</td>";
            echo "  <td>{$u["cpf"]}</td>";
            echo "  <td>{$u["rg"]}</td>";
            echo "  <td>{$u["sexo"]}</td>";
            echo "  <td>",dateUStoDateBR($c["datanascimento"]),"</td>";
            echo "  <td>{$u["endereco"]}</td>";
            echo "  <td>{$u["estado"]}</td>";
             echo "  <td>{$u["cidade"]}</td>";
            echo "  <td><a href='../controller/excluiruUsuarioByIdController.php?id={$u["idusuario"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarUsuario.php?id={$u["idusuario"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
