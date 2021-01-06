<?php

$informacoes = $_POST["post"];

$postDAO = new postDAO();

$postDAO->CadastrarPost();
