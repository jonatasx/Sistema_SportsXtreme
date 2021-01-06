
<?php
require_once '../dao/postDAO.php';

$idpost = $_GET["id"];
//echo $idpost;

$postDAO = new postDAO();
$postDAO->excluirpost($idpost);
if ($sucesso) {
    echo "<script>";
    $msg = " | Post Excluído com Sucesso!";
    echo "window.location.href = '../view/listarAllpost.php?msg={$msg}';";
    echo "</script> ";
}

echo "<script>";
echo "window.location.href = '../view/listarAllpost.php';";
echo "</script> ";
?>

