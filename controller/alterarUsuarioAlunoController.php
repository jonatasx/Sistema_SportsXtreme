<?php

require_once '../dto/UsuarioDTO.php';
require_once '../dao/UsuarioDAO.php';

$nomecompleto = $_POST["nomecompleto"];
$email = $_POST["email"];
$estado = $_POST["estado"];
$datanascimento = $_POST["datadenascinmento"];
$idusuario = $_POST["idusuario"];

$UsuarioDTO = new UsuarioDTO();
$UsuarioDTO->setNomecompleto($nomecompleto);
$UsuarioDTO->setEmail($email);
$UsuarioDTO->setEstado($estado);
$UsuarioDTO->setDatanascimento($datanascimento);
$UsuarioDTO->setIdusuario($idusuario);


$UsuarioDAO = new UsuarioDAO();
$UsuarioDAO->update($UsuarioDTO);


echo "<script>";
echo "window.location.href = '../view/FormalterarUsuario.php';";
echo "</script> ";
?>
