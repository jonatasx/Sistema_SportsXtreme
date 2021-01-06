<?php

$informacoes = $_POST["informacoes"];

$UsuarioDAO = new UsuarioDAO();

$UsuarioDAO -> CadastrarCurriculo();
