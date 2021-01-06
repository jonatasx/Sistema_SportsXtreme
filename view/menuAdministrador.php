<!DOCTYPE html>
<?php
include_once 'webcomplementos.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 value="<?php echo  $usuario["email"]?>">usuário professor!!! </h1>
        <div class="container"
        <table class="table table-striped" border="0" width="100%">
            <tr>
                <td>
                    <a href="formCadastrarUsuario.php" target="centro">Cadastro de Usuário</a> |
                    <a href="listarAllCliente.php" target="centro">Mostrar Perfil</a> |
                    <a href="listarProdutos.php" target="centro">mostrar Posts</a> |
                    <a href="formCadastrarCliente.php" target="centro">Cadastrar Aluno em Curso</a>
                </td>
        </table>
    </body>
</div>
    <?php
    include_once '../view/';
    ?>
</html>
