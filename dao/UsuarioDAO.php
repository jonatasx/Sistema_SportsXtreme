<?php

require_once 'conexao/conexao.php';

class UsuarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllUsuario() {
        try {
            $sql = "SELECT * FROM usuario as U
           inner join perfil as P on P.idperfil=U.perfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllAluno() {
        try {
            $sql = "SELECT * FROM usuario where perfil=2 order by 2";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
     public function getAllProfessor() {
        try {
            $sql = "SELECT * FROM usuario where perfil=1 order by 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvar(usuarioDTO $UsuarioDTO) {
        try {
            $sql = "INSERT INTO usuario (nomecompleto,email,senha,cpf,datadenascimento,cidade,estado,perfil) 
                    VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $UsuarioDTO->getnomecompleto());
            $stmt->bindValue(2, $UsuarioDTO->getEmail());
            $stmt->bindValue(3, $UsuarioDTO->getSenha());
            $stmt->bindValue(4, $UsuarioDTO->getcpf());
            $stmt->bindValue(5, $UsuarioDTO->getdatanascimento());
            $stmt->bindValue(6, $UsuarioDTO->getCidade());
            $stmt->bindValue(7, $UsuarioDTO->getestado());
            $stmt->bindValue(8, $UsuarioDTO->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirUsuario($idusuario) {
        try {
            $sql = "DELETE FROM usuario 
                   WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getusuarioById($idusuario) {
        try {
            $sql = "SELECT * FROM usuario WHERE idusuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function update(usuarioDTO $UsuarioDTO) {
        try {
            $sql = "UPDATE usuario SET nomecompleto=?,
                                       email=?,
                                       datadenascimento=?,
                                       estado=?
                                       WHERE idusuario= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $UsuarioDTO->getNomecompleto());
            $stmt->bindValue(2, $UsuarioDTO->getEmail());
            $stmt->bindValue(3, $UsuarioDTO->getDatanascimento());
            $stmt->bindValue(4, $UsuarioDTO->getEstado());
            $stmt->bindValue(5, $UsuarioDTO->getIdusuario());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
