<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$nome = $_POST["nomecompleto"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$datanascimento = dateBRtoDateUS($_POST["datanascimento"]);
$sexo = $_POST["sexo"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setnomecompleto($nome);
$usuarioDTO->setcpf($cpf);
$usuarioDTO->setrg($rg);
$usuarioDTO->setdatanascimento($datanascimento);
$usuarioDTO->setsexo($sexo);
$usuarioDTO->setendereco($endereco);

$clienteDAO = new usuarioDAO();
$sucesso = $clienteDAO->salvarusuario($usuarioDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
   echo "</script> ";
}
?>

