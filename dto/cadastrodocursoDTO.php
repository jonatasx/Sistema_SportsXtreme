<?php

class cadastrodocursoDTO {

    private $idcadastrocurso;
    private $datadainscricao;
    private $mensagem;
    private $idusuario;
    private $idcurso;

    function getIdcadastrocurso() {
        return $this->idcadastrocurso;
    }

    function getDatadainscricao() {
        return $this->datadainscricao;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function setIdcadastrocurso($idcadastrocurso) {
        $this->idcadastrocurso = $idcadastrocurso;
    }

    function setDatadainscricao($datadainscricao) {
        $this->datadainscricao = $datadainscricao;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function getIdcurso() {
        return $this->idcurso;
    }

    function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }

}
