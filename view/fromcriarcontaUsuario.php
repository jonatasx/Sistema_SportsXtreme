<!DOCTYPE html>
<?php
include_once './webcomplementos.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/logoprojeto.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Extreme Esportes Radicais</title>
    <table cellspacing="0" align="center">
        <tr>  
            <td> <img src="../imagens/mountaineer.jpg" alt="Montanhismo" width="540"  class="img-thumbnail"> </td>
            <td> <img src="../imagens/skateboar.jpg" alt="skate" width="540" class="img-thumbnail"> </td> 
            <td> <img src="../imagens/skateboar.jpg" alt="bjump" width="540"  class="img-thumbnail"> </td>
            <td> <img src="../imagens/mountaineer.jpg" alt="Montanhismo" width="540" class="img-thumbnail"> </td>
        </tr>     
    </table>   
 <script>
            function mascara_cpf(){
                var cpf= document.getElementById ('cpf')
                if(cpf.value.length == 3 || cpf.value.length == 7) {
                    cpf.value += "."
                } else if (cpf.value.length == 11) {
                    cpf.value += "-"
                }
    
            }
            </script>    
</head>
<body> 
    <div class="container">
        <center>
            <div class="card bg-light text-dark font-weight-bold" style="width: 50%;">
                <div class="card-body text-center">Cadastro de Perfil
                </div>
                <form  action="../controller/cadastrarUsuarioController.php" method="post">
                    <input type="hidden" value="2" name="opc">
                    <link rel="stylesheet" type="text/css" href="css/estilo.css">
                    <div class="form-group">
                        <label for="senha"/>Nome Completo</label>
                        <input type="text" name="nomecompleto"  id="senha" class="form-control col-6" required="">
                    </div>
                    <div class="form-group">
                        <label for="email"/>E-mail</label>
                        <input type="text" name="email"  id="email" class="form-control col-6" required="">
                    </div>
                    <div class="form-group">
                        <label for="senha"/>Senha</label>
                        <input type="password" name="senha"  id="senha" class="form-control col-6" required="">
                    </div>
                    <div class="form-group">
                        <label for="senha"/>Data de Nascimento</label>
                        <input type="date" name="datadenascimento"  id="senha" class="form-control col-6" required="">
                    </div>
                    <div class="form-group">
                        <label for="senha"/>CPF</label>
                    <input type="text" name="cpf" maxlength="14" placeholder="Campo não obrigatório" id="cpf" autocomplete="off" onkeyup="mascara_cpf()" class="form-control col-6">
                    </div>
                    <div class="form-group">
                        <label for="senha"/>Estado</label>
                        <input type="text" name="estado"  id="senha" class="form-control col-6" required="">
                    </div>
                    <div class="form-group">
                        <label for="senha"/>Cidade</label>
                        <input type="text" name="cidade"  id="senha" class="form-control col-6" required="">
                    </div>
                    <div class="form-group">
                        <label for="perfil"/>Perfil</label>
                        <select class="form-control col-4" name="perfil" >
                            <?php
                            require_once '../dao/perfilDAO.php';
                            $perfilDAO = new perfilDAO();
                            $perfil = $perfilDAO->getAllPerfil2();

                            foreach ($perfil as $p) {
                                echo "<option value='{$p["idperfil"]}' selected>{$p["perfil"]}</option>";
                            }
                            ?>
                             <?php
                            require_once '../dao/perfilDAO.php';
                            $perfilDAO = new perfilDAO();
                            $perfil = $perfilDAO->getAllPerfil1();

                            foreach ($perfil as $p) {
                                echo "<option value='{$p["idperfil"]}' selected>{$p["perfil"]}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <a href="../index.php" class="btn btn-warning btn-lg">Voltar</a>
                    <input type="submit" value="Criar conta" class="btn btn-danger btn-lg"/>
                    <br>
                    <br>
                    <br>
                </form>
            </div>

        </center>
    </div>
</div>
</body>
<?php
/* Created by Jônatas Santos Pessôa */
?>
</body>
</html>