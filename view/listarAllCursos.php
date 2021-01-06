<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
session_start();
include 'validaLogin.php';
$idUsuario = "";
if (isset($_SESSION["idusuario"])) {
    $idUsuario = $_SESSION["idusuario"];
}
$perfil = $_SESSION["perfil"];
$usuario = $_SESSION["nomecompleto"];
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
                <div class="card-body">Lista Cursos
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<b class='text-danger'>", $_GET["msg"], "</b>";
                    }
                    ?>
                </div>
            </div>
            <?php
            require_once '../dao/cursoDAO.php';
            include '../js/funcaoData.php';

            $cursoDAO = new cursoDAO();
            $ursos = $cursoDAO->getAllCurso();
            ?>
            <table class='table table-hover table-borderless'>
                <tr>
                    <th>Curso</th>
                    <th>Vagas</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                    <th>Excluir</th>
                    <th>Alterar</th>
                </tr>
                <?php
                foreach ($ursos as $c) {
                    echo "<tr>";
                    echo "  <td>{$c["curso"]}</td>";
                    echo "  <td>{$c["vagas"]}</td>";
                    echo "  <td>", dateUStoDateBR($c["datainicio"]), "</td>";
                    echo "  <td>" . dateUStoDateBR($c["datafim"]), "</td>";
                    echo "  <td><a href='../controller/excluirCursoID.php?idcurso={$c["idcurso"]}' onclick=\"return confirm('Tem certeza que deseja Excluir esse Curso?'); return false;\">"
                    . "Excluir</a></td>";
                    echo "  <td><a href='FormAltCurso.php?idcurso={$c["idcurso"]}' onclick=\"return confirm('Tem certeza que deseja Editar esse Curso?'); return false;\">"
                    . "Alterar</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>
