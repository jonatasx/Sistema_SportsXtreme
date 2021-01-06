<?php

require_once '../dto/cadastrodocursoDTO.php';
require_once '../dao/cadastrodocursoDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do comentário
$idcadastro = $_POST["idcadastro"];
$mensagem = $_POST["mensagem"];
$datadainscricao = $_POST["datadainscrição"];


$idcadastro = $_POST["idcadastro"];
$idUsuario = $_POST["idusuario"];

$cadastrodocursoDTO = new cadastrodocursoDTO();
$cadastrodocursoDTO->setMensagem($mensagem);
$cadastrodocursoDTO->setDatadainscricao($datadainscricao);
$cadastrodocursoDTO->setIdcadastro($idcadastro);

$cadastrodocursoDTO->setIdcadastrocurso($idcadastro);

$cadastrodocursoDAO = new cadastrodocursoDAO();
$cadastrodocursoDAO->updatecadastrodocursoById($cadastrodocursoDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllcadastros.php';";
echo "</script> ";
?>
