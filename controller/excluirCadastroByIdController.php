<?php
require_once '../dao/cadastrodocursoDAO.php';

$idcadastro = $_GET["id"];
//echo $idcadastro;

$cadastrodocursoDAO = new cadastrodocursoDAO();
$cadastrodocursoDAO->excluircadastrodocurso($idcadastro);

echo "<script>";
echo "window.location.href = '../view/listarAllcadastro.php';";
echo "</script> ";
?>


