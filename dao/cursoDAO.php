<?php

require_once 'conexao/conexao.php';

class cursoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllCurso() {
        try {
            $sql = "SELECT * FROM curso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAllCursoParaCadastro() {
        try {
            $sql = "SELECT * FROM curso where vagas!=0";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvar(cursoDTO $cursoDTO) {
        try {
            $sql = "INSERT INTO curso (curso,vagas,datainicio,datafim,idusuario) 
                    VALUES (?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cursoDTO->getCurso());
            $stmt->bindValue(2, $cursoDTO->getVagas());
            $stmt->bindValue(3, $cursoDTO->getDatainicio());
            $stmt->bindValue(4, $cursoDTO->getDatafim());
            $stmt->bindValue(5, $cursoDTO->getIdusuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluir($idcurso) {
        try {
            $sql = "DELETE FROM curso 
                   WHERE idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getCursoId($idcurso) {
        try {
            $sql = "SELECT * FROM curso WHERE idcurso = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            $stmt->execute();
            $cursos = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cursos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function update(cursoDTO $cursoDTO) {
        try {
            $sql = "UPDATE curso SET curso=?,
                                       vagas=?,
                                       datainicio=?,
                                       datafim=?
                                       WHERE idcurso= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cursoDTO->getCurso());
            $stmt->bindValue(2, $cursoDTO->getVagas());
            $stmt->bindValue(3, $cursoDTO->getDatainicio());
            $stmt->bindValue(4, $cursoDTO->getDatafim());
            $stmt->bindValue(5, $cursoDTO->getIdcurso());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function UpdateVagas($idcurso,$vaga) {
        try {
            $sql = "UPDATE curso SET  vagas=(vagas-$vaga)
                    WHERE idcurso=$idcurso";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcurso);
            $stmt->bindValue(2, $vaga);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
