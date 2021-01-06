<?php

$informacoes = $_POST["informacoes"];

$curriculoDao = new CurriculoDAO();

$curriculoDao->CadastrarCurriculo();
