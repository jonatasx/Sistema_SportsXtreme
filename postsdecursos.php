<!DOCTYPE html>
<?php
include_once 'webcomplementos.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="imagens/logoprojeto.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/cssdologin.css">
        <title>Extreme Esportes Radicais</title>
        <style>
            /* Chat containers */
            .container {
                border: 2px solid #dedede;
                background-color: #f1f1f1;
                border-radius: 5px;
                padding: 10px;
                margin: 10px 0;
            }

            /* Darker chat container */
            .darker {
                border-color: #ccc;
                background-color: #ddd;
            }

            /* Clear floats */
            .container::after {
                content: "";
                clear: both;
                display: table;
            }

            /* Style images */
            .container img {
                float: left;
                max-width: 60px;
                width: 100%;
                margin-right: 20px;
                border-radius: 50%;
            }

            /* Style the right image */
            .container img.right {
                float: right;
                margin-left: 20px;
                margin-right:0;
            }

            /* Style time text */
            .time-right {
                float: right;
                color: #aaa;
            }

            /* Style time text */
            .time-left {
                float: left;
                color: #999;
            }
        </style>
    </head>
    <body>
        



        <div class="container-fluid">
            <?php
            include_once './webcomplementos.html';
            require_once './dao/postDAO.php';
            $postDAO = new postDAO();
            $posts = $postDAO->getAllpost();
            ?>
            <br>
            <?php
            ?>
            <ul class="list-group">
                <?php
                foreach ($posts as $p) {
                    $idcurso = $p["curso_idcurso"];
                    if ($idcurso == 3) {
                        $img = "<img src = 'imagens/skateboar.jpg' class = 'right'>";
                    }
                    if ($idcurso == 9) {
                        $img = "<img src = 'imagens/imgdelogin.jpg' class = 'right'>";
                    }
                     if ($idcurso == 10) {
                        $img = "<img src = 'imagens/parkour2.jpg' class = 'right'>";
                    }
                     if ($idcurso == 11) {
                        $img = "<img src = 'imagens/bungee.jpg' class = 'right'>";
                    }
                    ?>
                         <li class = "list-group-item">
                        <div class = "container darker">
                            <?php echo $img; ?>
                            <p><?php echo "<b>Curso</b>: ".$p["curso"] ."<br><b>Valor do Curso:R$ </b>". $p["preco"] . "<br><b>Local do Curso: </b>".$p["cidade"] ."<br><b>Mensagem</b><br>". $p["mensagem"]; ?></p>
                            <span class="time-left">11:01</span>
                        </div>
                    </li>

                <?php }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
