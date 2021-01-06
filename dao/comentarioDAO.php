<?php

require_once 'conexao/conexao.php';

class comentarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllcomentario() {
        try {
            $sql = "SELECT * FROM comentario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $post;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarcomentario(comentarioDTO $comentarioDTO) {
        try {
            $sql = "INSERT INTO comentario (mensagem,datahora) 
                    VALUES (?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $comentarioDTO->getMensagem());
            $stmt->bindValue(2, $comentarioDTO->getDatahora());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluircomentario($idcomnetario) {
        try {
            $sql = "DELETE FROM comentario
                   WHERE idcomentario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcomnetario);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getcomentarioById($idcomentario) {
        try {
            $sql = "SELECT * FROM comentario WHERE idcomentario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcomentario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $post;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updatecomentarioById(comentarioDTO $comentarioDTO) {
        try {
            $sql = "UPDATE comentario SET mensagem=?,
                                       datahora=?,
                                        
                                      
                    WHERE idcomentario= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $comentarioDTO->getMensagem());
            $stmt->bindValue(2, $comentarioDTO->getDatahora()); 
            $stmt->bindValue(3, $comentarioDTO->getIdcomentario());
            $stmt->bindValue(4, $usuarioDTO->getIdusuario());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>