<?php
require_once '../dto/usuarioDTO.php';
require_once '../dao/usuarioDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nomecompleto"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$datanascimento = dateBRtoDateUS($_POST["datanascimento"]);
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setCpf($cpf);
$usuarioDTO->setRg($rg);
$usuarioDTO->setDatanascimento($datanascimento);
$usuarioDTO->setSexo($sexo);
$usuarioDTO->setEndereco($endereco);

$usuarioDTO = new UsuarioalunoDAO();
$sucesso = $usuarioDTO->salvarUsuarioaluno($usuarioDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarAlunoController.php?msg={$msg}';";
   echo "</script> ";
}
?>

