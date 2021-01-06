<?php

class UsuarioDTO {
    private $idusuario;
    private $nomecompleto;
    private $email;
    private $senha;
    private $datanascimento;
    private $cpf;
    private $estado;
    private $perfil;
    private $cidade;
    
  
    function getIdusuario() {
        return $this->idusuario;
    }

    function getNomecompleto() {
        return $this->nomecompleto;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getEstado() {
        return $this->estado;
    }

    function getSenha() {
        return $this->senha;
    }

  

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNomecompleto($nomecompleto) {
        $this->nomecompleto = $nomecompleto;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }




   



}
/* Created by Jônatas Santos Pessôa */
?>
