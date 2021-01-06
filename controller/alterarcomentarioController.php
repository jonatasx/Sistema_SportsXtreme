<?php

require_once '../dto/comentarioDTO.php';
require_once '../dao/comentarioDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do comentário
$mensagem = $_POST["mensagem"];
$datahora = $_POST["datahora"];


$idcomentário = $_POST["idcomentário"];
$idUsuario = $_POST["idusuario"];

$comentarioDTO = new comentarioDTO();
$comentarioDTO->setMensagem($mensagem);
$comentarioDTO->setDatahora($datahora);


$comentarioDTO->setIdcomentario($idcomentário);

$comentarioDAO = new comentarioDAO();
$comentarioDAO->updatecomentarioById($comentarioDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllComentário.php';";
echo "</script> ";
?>


