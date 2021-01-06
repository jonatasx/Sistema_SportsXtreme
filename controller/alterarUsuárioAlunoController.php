<?php

require_once '../dto/UsuarioDTO.php';
require_once '../dao/UsuarioDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$datanascimento = dateBRtoDateUS($_POST["datanascimento"]);
$sexo = $_POST["sexo"];
$Estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$idUsuario = $_POST["idUsuarioAluno"];

$UsuarioDTO = new UsuarioDTO();
$UsuarioDTO->setNome($nome);
$UsuarioDTO->setCpf($cpf);
$UsuarioDTO->setDatanascimento($datanascimento);
$UsuarioDTO->setSexo($sexo);
$UsuarioDTO->setEstado($Estado);
$UsuarioDTO->setCidade($cidade);
$UsuarioDTO->setCnpj($cnpj);

$UsuarioDTO->setIdusuario($idUsuario);

$UsuarioDAO = new UsuarioDAO();
$UsuarioDAO->updateusuarioById($UsuarioDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllUsuario.php';";
echo "</script> ";
?>
