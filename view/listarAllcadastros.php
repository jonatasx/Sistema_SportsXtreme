<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/cadastrodocursoDAO.php';
        include '../js/funcaoData.php';

        $cadastrodocursoDAO = new cadastrodocursoDAO();
        $cadastros = $cadastrodocursoDAO->getAllcadastrodocurso();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Mensagem</th>";
        echo "  <th>Data da Inscrição</th>";
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";


        foreach ($cadastros as $cad) {
            echo "<tr>";
            echo "  <td>{$cad["mensagem"]}</td>";
            
            echo "  <td>",dateUStoDateBR($cad["datadainscricao"]),"</td>";
            echo "  <td>{$u["nome"]}</td>";
            echo "  <td>{$u["estado"]}</td>";
             echo "  <td>{$u["cidade"]}</td>";
             echo " <td> {$u["idade"]}</td>";
             echo "<td> {$u["email"]}</td>";
            echo  "<td><a href='../controller/excluircadastroByIdController.php?id={$cad["idcadastro"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarcadastro.php?id={$cad["idcadastro"]}'>Alterar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>

    </body>
</html>

