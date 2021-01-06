<?php

require_once '../dao/UsuarioDAO.php';
require_once '../dto/UsuarioDTO.php';


$opc = $_POST["opc"];


if ($opc == 1) {
    $nomecompleto = $_POST["nomecompleto"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $datadenascimento = $_POST["datadenascimento"];
    $cpf = md5($_POST["cpf"]);
    $perfil = $_POST["perfil"];
    $Estado = $_POST["estado"];
    $cidade = $_POST["cidade"];


    $UsuarioDTO = new UsuarioDTO();
    $UsuarioDTO->setNomecompleto($nomecompleto);
    $UsuarioDTO->setemail($email);
    $UsuarioDTO->setSenha($senha);
    $UsuarioDTO->setDatanascimento($datadenascimento);
    $UsuarioDTO->setcpf($cpf);
    $UsuarioDTO->setPerfil($perfil);
    $UsuarioDTO->setEstado($Estado);
    $UsuarioDTO->setCidade($cidade);

    $usuarioDAO = new UsuarioDAO();
    $sucesso = $usuarioDAO->salvar($UsuarioDTO);
    if ($sucesso) {
        echo "<script>";
        $msg = "Usuário cadastrado com sucesso!";
        echo "window.location.href = '../view/listarAllUsuario.php?msg={$msg}';";
        echo "</script> ";
    }
}
if ($opc == 2) {
    $nomecompleto = $_POST["nomecompleto"];
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);
    $datadenascimento = $_POST["datadenascimento"];
    $cpf = $_POST["cpf"];
    $perfil = $_POST["perfil"];
    $Estado = $_POST["estado"];
    $cidade = $_POST["cidade"];

    $UsuarioDTO = new UsuarioDTO();
    $UsuarioDTO->setNomecompleto($nomecompleto);
    $UsuarioDTO->setemail($email);
    $UsuarioDTO->setSenha($senha);
    $UsuarioDTO->setDatanascimento($datadenascimento);
    $UsuarioDTO->setcpf($cpf);
    $UsuarioDTO->setPerfil($perfil);
    $UsuarioDTO->setEstado($Estado);
    $UsuarioDTO->setCidade($cidade);

    $usuarioDAO = new UsuarioDAO();
    $sucesso = $usuarioDAO->salvar($UsuarioDTO);
    if ($sucesso) {
        echo "<script>";
        $msg = "Usuário cadastrado com sucesso!";
        echo "window.location.href = '../index.php?msg={$msg}';";
        echo "</script> ";
    }
}
?>

