<?php

require_once '../dto/cadastrodocursoDTO.php';
require_once '../dao/cadastrodocursoDAO.php';
require_once '../dto/cursoDTO.php';
require_once '../dao/cursoDAO.php';


// recuperei os dados do formulario
$datadainscricao = $_POST["datadainscricao"];
$mensagem = $_POST["mensagem"];
$idusuario = $_POST["idusuario"];
$idcurso = $_POST["idcurso"];
$vaga = 1;

$BuscarCadatroDAO = new cadastrodocursoDAO();
$cadasatro = $BuscarCadatroDAO->getBuscarcadastro($idusuario, $idcurso);
if ($cadasatro == NULL) {
    $cadastrodocursoDTO = new cadastrodocursoDTO;
    $cadastrodocursoDTO->setDatadainscricao($datadainscricao);
    $cadastrodocursoDTO->setMensagem($mensagem);
    $cadastrodocursoDTO->setIdusuario($idusuario);
    $cadastrodocursoDTO->setIdcurso($idcurso);

    $cursoDTO = new cursoDTO();
    $cursoDTO->setIdcurso($idcurso);
    
    $cursoDAO = new cursoDAO();
    $cursoDAO->UpdateVagas($idcurso, $vaga);

    $cadastrodocursoDAO = new cadastrodocursoDAO();
    $sucesso = $cadastrodocursoDAO->salvarcadastrodocurso($cadastrodocursoDTO);

    if ($sucesso) {
        $msg = "  Cadastrado no curso com sucesso.";
        echo "<script>";
        echo "window.location.href = '../view/formCadastrarnoCurso.php?msg={$msg}';";
        echo "</script> ";
    }
} else {
    $msg = " O aluno Já está cadastrado nesse curso";
    echo "<script>";
    echo "window.location.href = '../view/formCadastrarnoCurso.php?msg={$msg}';";
    echo "</script> ";
}
if ($vaga<1) {
    $msg ="Curso sem vagas";
    echo "<script>";
    echo "window.location.href = '../view/formCadastrarnoCurso.php?msg={$msg}';";
    echo "</script> ";
}
?>

