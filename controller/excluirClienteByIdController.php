<?php
require_once '../dao/UsuarioDAO.php';

$idcliente = $_GET["id"];
//echo $idcliente;

$clienteDAO = new UsuarioDAO();
$clienteDAO->excluirCliente($idcliente);

echo "<script>";
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script> ";
?>
