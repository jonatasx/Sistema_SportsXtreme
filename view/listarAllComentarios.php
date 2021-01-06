<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/comentarioDAO.php';
        include '../js/funcaoData.php';

        $comentarioDAO = new comentarioDAO();
        $comentario = $comentarioDAO->getAllcomentario();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Mensagem</th>";
        echo "  <th>Datahora</th>";
      
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";


        foreach ($comentario as $com) {
            echo "<tr>";
            echo "  <td>{$com["Mensagem"]}</td>";
           
            echo "  <td>",dateUStoDateBR($com["datahora"]),"</td>";
           
            echo "  <td><a href='../controller/excluirComentarioByIdController.php?id={$com["idcomentario"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarcomentario.php?id={$com["idcomentario"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>
