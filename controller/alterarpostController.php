<?php

require_once '../dto/postDTO.php';
require_once '../dao/postDAO.php';


// recuperei os dados do formulario
// recuperei os dados do formulario
$idpost = $_POST["idpost"];
$preco = $_POST["preco"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$mensagem = $_POST["mensagem"];

$postDTO = new postDTO();
$postDTO->setPreco($preco);
$postDTO->setEstado($estado);
$postDTO->setCidade($cidade);
$postDTO->setMensagem($mensagem);
$postDTO->setIdpost($idpost);

$postDAO = new postDAO();
$postDAO->updatepostById($postDTO);

echo "<script>";
echo "window.location.href = '../view/listarAllPost.php';";
echo "</script> ";
?>

