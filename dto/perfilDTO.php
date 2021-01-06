<?php

class perfilDTO {

    private $idperfil;
    private $perfil;

    function getIdperfil() {
        return $this->idperfil;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setIdperfil($idperfil) {
        $this->idperfil = $idperfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}
