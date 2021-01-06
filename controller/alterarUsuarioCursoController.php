<?php

require_once '../dto/cursoDTO.php';
require_once '../dao/cursoDAO.php';

// recuperei os dados do formulario
$curso = $_POST["curso"];
$vagas = $_POST["vagas"];
$datainicio = $_POST["datainicio"];
$datafim = $_POST["datafim"];
$idcurso = $_POST["idcurso"];

$cursoDTO = new cursoDTO();
$cursoDTO->setCurso($curso);
$cursoDTO->setVagas($vagas);
$cursoDTO->setDatainicio($datainicio);
$cursoDTO->setDatafim($datafim);
$cursoDTO->setIdcurso($idcurso);


$cursoDAO = new cursoDAO();
$sucesso = $cursoDAO->update($cursoDTO);

if ($sucesso) {
    $msg = " | Curso Editado com Sucesso!";
    echo "<script>";
    echo "window.location.href = '../view/listarAllCursos.php?msg={$msg}';";
    echo "</script> ";
}
?>

