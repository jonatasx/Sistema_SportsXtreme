<?php

require_once '../dto/cursoDTO.php';
require_once '../dao/cursoDAO.php';


// recuperei os dados do formulario
$curso = $_POST["curso"];
$vagas = $_POST["vagas"];
$datainicio = $_POST["datainicio"];
$datafim = $_POST["datafim"];
$idusuario = $_POST["idusuario"];

$cursoDTO = new cursoDTO();
$cursoDTO->setCurso($curso);
$cursoDTO->setVagas($vagas);
$cursoDTO->setDatainicio($datainicio);
$cursoDTO->setDatafim($datafim);
$cursoDTO->setIdusuario($idusuario);


$cursoDAO = new cursoDAO();
$sucesso = $cursoDAO->salvar($cursoDTO);

if ($sucesso) {
    $msg = " | Curso cadastrado com Sucesso!";
    echo "<script>";
    echo "window.location.href = '../view/FormCadastrarCurso.php?msg={$msg}';";
    echo "</script> ";
}
?>

