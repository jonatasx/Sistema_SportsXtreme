<?php
require_once '../dto/postDTO.php';
require_once '../dao/postDAO.php';


// recuperei os dados do formulario
$usuario_idusuario= $_POST["usuario_idusuario"];
$curso_idcurso= $_POST["curso_idcurso"];
$preco = $_POST["preco"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$mensagem = $_POST["mensagem"];

//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
//echo $curso_idcurso;
//exit;

$postDTO = new postDTO();
$postDTO->setUsuario_idusuario($usuario_idusuario);
$postDTO->setCurso_idcurso($curso_idcurso);
$postDTO->setPreco($preco);
$postDTO->setEstado($estado);
$postDTO->setCidade($cidade);
$postDTO->setMensagem($mensagem);


$postDAO = new postDAO();
$sucesso = $postDAO->salvarpost($postDTO);

if ($sucesso){
   $msg = "Post Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCriarPost.php?msg={$msg}';";
   echo "</script> ";
}
?>

