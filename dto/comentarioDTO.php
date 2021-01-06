<?php

class comentarioDTO {
   private $idcomentario;
    private $nome;
    private $cpf;
    private $rg;
    function getIdcomentario() {
        return $this->idcomentario;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function setIdcomentario($idcomentario) {
        $this->idcomentario = $idcomentario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }


}





?>