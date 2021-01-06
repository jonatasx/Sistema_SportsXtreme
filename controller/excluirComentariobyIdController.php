<?php
require_once '../dao/comentarioDAO.php';

$idcomentario = $_GET["id"];
//echo $idcomentario;

$comentarioDAO = new comentarioDAO();
$comentarioDAO->excluircomentario($idcomentario);

echo "<script>";
echo "window.location.href = '../view/listarAllcomentario.php';";
echo "</script> ";
?>
