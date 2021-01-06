<?php

require_once 'conexao/conexao.php';

class perfilDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

     public function getAllPerfil3() {
        try {
            $sql = "SELECT * FROM perfil where idperfil=3";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $perfil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $perfil;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllPerfil2() {
        try {
            $sql = "SELECT * FROM perfil where idperfil=2";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $perfil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $perfil;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
       public function getAllPerfil1() {
        try {
            $sql = "SELECT * FROM perfil where idperfil=1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $perfil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $perfil;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllPerfilGeral() {
        try {
            $sql = "SELECT * FROM perfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $perfil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $perfil;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
