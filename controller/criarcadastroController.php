<?php
require_once '../dto/cadastrodocursoDTO.php';
require_once '../dao/cadastrodocursoDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nomedocurso = $_POST["nomedocurso"];
$preco = $_POST["preço"];
$estado = $_POST["estado"];
$descricao = $_POST["descricao"];



$cadastrodocursoDTO = new cadastrodocursoDTO();
$cadastrodocursoDTO->setCurso($nomedocurso);
$cadastrodocursoDTO->setPreco($preco);
$cadastrodocursoDTO->setEstado($estado);
$cadastrodocursoDTO->setMensagem($descricao);


$cadastrodocursoDAO = new cadastrodocursoDAO();
$sucesso = $cadastrodocursoDAO->salvarcadastrodocurso($cadastrodocursoDTO);

if ($sucesso){
   $msg = "Cadastro realizado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarnocurso.php?msg={$msg}';";
   echo "</script> ";
}
?>
