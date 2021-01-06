<?php

class cursoDTO {

    private $idcurso;
    private $curso;
    private $vagas;
    private $datainicio;
    private $datafim;
    private $idusuario;
    function getIdcurso() {
        return $this->idcurso;
    }

    function getCurso() {
        return $this->curso;
    }

    function getVagas() {
        return $this->vagas;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setVagas($vagas) {
        $this->vagas = $vagas;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }
    function getDatainicio() {
        return $this->datainicio;
    }

    function getDatafim() {
        return $this->datafim;
    }

    function setDatainicio($datainicio) {
        $this->datainicio = $datainicio;
    }

    function setDatafim($datafim) {
        $this->datafim = $datafim;
    }



}

/* Created by Jônatas Santos Pessôa */
?>
