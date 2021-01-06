<?php

require_once 'conexao/conexao.php';

class cadastrodocursoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllcadastrodocursoID($idusuario) {
        try {
            $sql = "SELECT * FROM cadastrodocurso as CA
                    inner join usuario as U on U.idusuario=CA.idusuario
                    inner join curso as C on C.idcurso=CA.idcurso
                    where CA.idusuario=$idusuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cadastrodocurso = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cadastrodocurso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllcadastrodocurso() {
        try {
            $sql = "SELECT * FROM cadastrodocurso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cadastrodocurso = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cadastrodocurso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllAlunosCadastro() {
        try {
            $sql = "SELECT * FROM cadastrodocurso as CA
                    inner join usuario as U on U.idusuario=CA.idusuario
                    inner join curso as C on C.idcurso=CA.idcurso ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cadastrodocurso = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cadastrodocurso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarcadastrodocurso(cadastrodocursoDTO $cadastrodocursoDTO) {
        try {
            $sql = "INSERT INTO cadastrodocurso (datadainscricao,mensagem,idusuario,idcurso) 
                    VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrodocursoDTO->getDatadainscricao());
            $stmt->bindValue(2, $cadastrodocursoDTO->getMensagem());
            $stmt->bindValue(3, $cadastrodocursoDTO->getIdusuario());
            $stmt->bindValue(4, $cadastrodocursoDTO->getIdcurso());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluircadastrodocurso($idcadastrodocurso) {
        try {
            $sql = "DELETE FROM cadastrodocurso 
                   WHERE idcadastrodocurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcadastrodocurso);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getcadastrodocursoById($idcadastrodocurso) {
        try {
            $sql = "SELECT * FROM cadastrodocurso WHERE idcadastrodocurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcadastrodocurso);
            $stmt->execute();
            $cadastrodocurso = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cadastrodocurso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getBuscarcadastro($idusuario,$idcurso) {
        try {
            $sql = "SELECT * FROM cadastrodocurso WHERE idusuario =$idusuario and idcurso=$idcurso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->bindValue(2, $idcurso);
            $stmt->execute();
            $cadastrodocurso = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cadastrodocurso;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updatecadastrodocursoById(cadastrodocursoDTO $cadastrodocursoDTO) {
        try {
            $sql = "UPDATE cadastrodocurso SET datadainscricao=?,
                                       mensagem=?,
                                      
                    WHERE idcadastrodocurso= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrodocursoDTO->getDatadainscricao());
            $stmt->bindValue(2, $cadastrodocursoDTO->getMensagem());
            $stmt->bindValue(3, $cadastrodocursoDTO->getIdcadastrocurso());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>

