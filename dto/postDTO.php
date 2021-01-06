<?php

class postDTO {

    private $idpost;
    private $mensagem;
    private $preco;
    private $estado;
    private $cidade;
    private $usuario_idusuario;
    private $curso_idcurso;

    function getIdpost() {
        return $this->idpost;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getPreco() {
        return $this->preco;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUsuario_idusuario() {
        return $this->usuario_idusuario;
    }

    function getCurso_idcurso() {
        return $this->curso_idcurso;
    }

    function setIdpost($idpost) {
        $this->idpost = $idpost;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUsuario_idusuario($usuario_idusuario) {
        $this->usuario_idusuario = $usuario_idusuario;
    }

    function setCurso_idcurso($curso_idcurso) {
        $this->curso_idcurso = $curso_idcurso;
    }

}

/* Created by Jônatas Santos Pessôa */
?>
