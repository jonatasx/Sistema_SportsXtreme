<?php

require_once '../dao/cursoDAO.php';

$idcurso = $_GET["idcurso"];
//echo $idcliente;

$cursoDAO = new cursoDAO();
$sucesso=$cursoDAO->excluir($idcurso);

if ($sucesso) {
    echo "<script>";
    $msg = " | Curso Excluído com Sucesso!";
    echo "window.location.href = '../view/listarAllCursos.php?msg={$msg}';";
    echo "</script> ";
}

echo "<script>";
echo "window.location.href = '../view/listarAllCursos.php';";
echo "</script> ";
?>
