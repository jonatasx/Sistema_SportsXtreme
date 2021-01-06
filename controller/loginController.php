<?php
session_start();
require_once '../dao/loginDAO.php';

$usuario = $_POST["email"];
$senha = md5($_POST["senha"]);

//echo $senha;
//exit();

$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($usuario, $senha);

if (!empty($usuario)) {
    $_SESSION["email"] = $usuario["email"];
    $_SESSION["perfil"] = $usuario["perfil"];
    $_SESSION["idusuario"] = $usuario["idusuario"];
    $_SESSION["nomecompleto"] = $usuario["nomecompleto"];
//    echo "<pre>";
////   var_dump($_SESSION);
//    echo 'Estou aqui';
//   echo "</pre>";
//    exit();
    //header("location:../view/principal.php");
    echo "<script>";
    echo "window.location.href = '../view/principal.php';";
    echo "</script> ";
} else {
    $msg = "Usuário e/ou senha invalido";
    echo "<script>";
    echo "window.location.href = '../index.php?msg={$msg}';";
    echo "</script> ";
    
}
?>
