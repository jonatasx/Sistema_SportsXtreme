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
            <br>
            <div class="card text-white bg-success font-weight-bold text-center">
                <div class="card-body">Lista de Alunos e Curso
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <?php
            require_once '../dao/cadastrodocursoDAO.php';
            include '../js/funcaoData.php';

            $cadastrodocursoDAO = new cadastrodocursoDAO();
            $cursosAlunos = $cadastrodocursoDAO->getAllAlunosCadastro();
            ?>
            <table class='table table-hover table-borderless'>
                <tr>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>Data Inscricao</th>
                    <th>Excluir</th>
                    <th>Alterar</th>
                </tr>
                <?php
                foreach ($cursosAlunos as $c) {
                    echo "<tr>";
                    echo "  <td>{$c["nomecompleto"]}</td>";
                    echo "  <td>{$c["curso"]}</td>";
                    echo "  <td>", dateUStoDateBR($c["datadainscricao"]), "</td>";
                    echo "  <td><a href='../controller/excluirCursoID.php?idcurso={$c["idusuario"]}' onclick=\"return confirm('Tem certeza que deseja Excluir esse Curso?'); return false;\">"
                    . "Excluir</a></td>";
                    echo "  <td><a href='FormAltCurso.php?idcurso={$c["idusuario"]}' onclick=\"return confirm('Tem certeza que deseja Editar esse Curso?'); return false;\">"
                    . "Alterar</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>
