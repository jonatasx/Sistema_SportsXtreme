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
        <script>
            function mascara_cpf(){
                var cpf= document.getElementById ('cpf')
                if(cpf.value.length == 3 || cpf.value.length == 7) {
                    cpf.value += "."
                } else if (cpf.value.length == 11) {
                    cpf.value += "."
                }
    
            }
            </script>
    </head>
    <body> 
     
        <div class="container">
            <br>
            <div class="card bg-dark text-white" style="width: 50%;">
                <div class="card-body">Cadastro de usuário
                    <?php
                    if (!empty($_GET["msg"])) {
                        echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="card bg-light text-dark font-weight-bold text-upppercase" style="width: 50%;">
                <div class="card-body">
                    <form  action="../controller/cadastrarUsuarioController.php" method="post">
                        <input type="hidden" name="opc" value="1">
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
                        <input type="text" name="cpf"  id="cpf" autocomplete="off" onkeyup="mascara_cpf()" class="form-control col-6" required="">
                        
   
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
                            <select class="form-control col-4" name="perfil">
                                <?php
                                require_once '../dao/perfilDAO.php';
                                $perfilDAO = new perfilDAO();
                                $perfil = $perfilDAO->getAllPerfilGeral();

                                foreach ($perfil as $p) {
                                    echo "<option value='{$p["idperfil"]}' selected>{$p["perfil"]}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" value="Criar conta" class="btn btn-danger btn-lg"/>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <?php
    /* Created by Jônatas Santos Pessôa */
    ?>
</body>
</html>