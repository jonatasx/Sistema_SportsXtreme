<?php
require_once '../dao/UsuarioDAO.php';

$idusuario = $_GET["id"];
//echo $idcliente;

$UsuarioDAO = new UsuarioDAO();
$UsuarioDAO->excluirUsuario($idUsuario);

echo "<script>";
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script> ";
?>
