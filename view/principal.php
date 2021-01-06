<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
session_start();
include 'validaLogin.php';
$idUsuario = "";
if (isset($_SESSION["idusuario"])) {
    $idUsuario = $_SESSION["idusuario"];
}
$perfil = $_SESSION["perfil"];
$usuario = $_SESSION["nomecompleto"];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/logoprojeto.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Extreme Esportes Radicais</title>
    </head>
    <body>
        <table cellspacing="0" align="center">
            <tr>  
                <td> <img src="../imagens/mountaineer.jpg" alt="Montanhismo" width="540"  class="img-thumbnail"> </td>
                <td> <img src="../imagens/skateboar.jpg" alt="skate" width="540" class="img-thumbnail"> </td> 
                <td> <img src="../imagens/base-jump.jpg" alt="bjump" width="540"  class="img-thumbnail"> </td>
                <td> <img src="../imagens/parkour.jpg" alt="Montanhismo" width="540" class="img-thumbnail"> </td>
            </tr>     
        </table>        
        <?php
        ?> 
        <table width="100%" border="1">
            <tr>
                <td>
                    <?php
                    switch ($_SESSION["perfil"]) {
                        case "Professor":
                            ?>
                            <nav class="navbar navbar-expand-sm bg-danger navbar-dark justify-content-center">
                                <a class="navbar-brand" href="#"><?php echo $perfil . ": <b class='text-uppercase'> " . $usuario . "</b>"; ?></a>
                                <ul class="navbar-nav">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="../postsdecursos.php" target="post">Posts de Cursos</a>
                </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Cadastros
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href = 'http://localhost/Sistema_SportsXtreme/view/FormalterarUsuario.php?id=<?php echo $idUsuario ?>' target='centro' class = 'dropdown-item'> Meu Perfil</a>
                                            <a href = 'FormCadastrarCurso.php' target = 'centro' class = 'dropdown-item'>Curso</a>
                                            <a href = 'formCriarPost.php' target = 'centro' class = 'dropdown-item'>Post</a>
                                            <a href = 'formCadastrarnoCurso.php' target = 'centro' class = 'dropdown-item'>Aluno em Curso</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Listas
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href = 'listarAllCursos.php' target = 'centro' class = 'dropdown-item'>Mostrar Cursos</a>
                                            <a href = 'listarAllPost.php' target = 'centro' class = 'dropdown-item'>Mostrar Meus Posts</a>
                                            <a href = 'listarAllCursosAlunos.php' target = 'centro' class = 'dropdown-item'>Aluno e Cursos</a>
                                        </div>
                                    </li>
                                    <li class = 'nav-item dropdown'>
                                        <a class = 'nav-link' href = '../controller/logoffController.php'>
                                            Sair
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <?php
                            break;
                        case "Aluno":
                            ?>
                            <nav class="navbar navbar-expand-sm bg-danger navbar-dark justify-content-center">
                                <a class="navbar-brand" href="#"><?php echo $perfil . ": <b class='text-uppercase'> " . $usuario . "</b>"; ?></a>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../postsdecursos.php" target="post">Posts de Cursos</a>
                </li>

                                    <li class="nav-item dropdown">
                                        
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Minha Conta
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class = 'dropdown-item' href = 'http://localhost/Sistema_SportsXtreme/view/FormalterarUsuario.php?id=<?php echo $idUsuario ?>' target='centro'>Meu Perfil</a>
                                            <a class = 'dropdown-item' href = 'listarAllCursosAlunosID.php' target = 'centro'>Meus Cursos</a>
                                        </div>
                                    </li>
                                    <li class = 'nav-item dropdown'>
                                        <a class = 'nav-link' href = '../controller/logoffController.php'>
                                            Sair
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <?php
                            break;
                        case "Administrador":
                            ?>
                            <nav class="navbar navbar-expand-sm bg-danger navbar-dark justify-content-center">
                                <a class="navbar-brand" href="#"><?php echo $perfil . ": <b class='text-uppercase'> " . $usuario . "</b>"; ?></a>
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Cadastros
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href = 'formCadastrarUsuario.php' target = 'centro' class = 'dropdown-item'>Usuário</a>
                                            <a href = 'FormCadastrarCurso.php' target = 'centro' class = 'dropdown-item'>Curso</a>
                                            <a href = 'formCriarPost.php' target = 'centro' class = 'dropdown-item'>Post</a>
                             
                </li>
                                            <a href = 'formCadastrarnoCurso.php' target = 'centro' class = 'dropdown-item'>Aluno em Curso</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Listas
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href = 'listarAllusuario.php' target = 'centro' class = 'dropdown-item'>Mostrar Usuários</a>
                                            <a href = 'listarAllCursos.php' target = 'centro' class = 'dropdown-item'>Mostrar Cursos</a>
                                            <a href = 'postsdecursos.php' target = 'centro' class = 'dropdown-item'>Mostrar Posts</a>
                                            <a href = 'listarAllCursosAlunos.php' target = 'centro' class = 'dropdown-item'>Aluno e Cursos</a>
                                        </div>
                                    </li>
                                    <li class = 'nav-item dropdown'>
                                        <a class = 'nav-link' href = '../controller/logoffController.php'>
                                            Sair
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <?php
                            break;
                    }
                    ?>
                </td>
            </tr>
        </table>
        <table id="tablehome" border="5">
            <tr>         
                <td>
                    <iframe name="centro" src="" width="100%" height="100%" frameborder="0"></iframe>
                   
                </td>
            </tr>                
        </table>
        <?php include '../footer.php' ?>
    </body>
</html>
