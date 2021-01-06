<!DOCTYPE html>
<?php
session_start();
include_once './webcomplementos.html';
$idusuario = $_SESSION["idusuario"];
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
                <div class="card-body">Meus Cursos
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
            $cursosAlunos = $cadastrodocursoDAO->getAllcadastrodocursoID($idusuario);
            ?>
            <table class='table table-hover table-borderless'>
                <tr>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>Data Inscricao</th>
                </tr>
                <?php
                foreach ($cursosAlunos as $c) {
                    echo "<tr>";
                    echo "  <td>{$c["nomecompleto"]}</td>";
                    echo "  <td>{$c["curso"]}</td>";
                    echo "  <td>", dateUStoDateBR($c["datadainscricao"]), "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>
