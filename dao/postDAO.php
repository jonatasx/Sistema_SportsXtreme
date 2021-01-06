<?php

require_once 'conexao/conexao.php';

class postDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllpost() {
        try {
            $sql = "SELECT * FROM post AS P
                    inner join  curso AS C ON C.idcurso=P.curso_idcurso";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $post;
        } catch (PDOException $exc) {
            echo "Falha na pesquisa do post. Erro:" .$exc->getMessage();
        }
    }
     public function getOnePost()
   {
       try{
           
          
          $sql = "SELECT * FROM post AS P
                    inner join  usuario AS U ON U.idusuario=P.usuario_idusuario";
           $stmt = $this->pdo->prepare($sql);
           $stmt ->execute();
          $post = $stmt->fetch(PDO::FETCH_ASSOC);
           return $post;
       } catch (PDOException $ex) {
           echo "Falha na pesquisa do post. Erro:" . $ex->getMessage();
           
       }
   }

    public function salvarpost(postDTO $postDTO) {
        try {
            $sql = "INSERT INTO post (mensagem,preco,estado,cidade,usuario_idusuario,curso_idcurso) 
                    VALUES (?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $postDTO->getMensagem());
            $stmt->bindValue(2, $postDTO->getPreco());
            $stmt->bindValue(3, $postDTO->getEstado());
            $stmt->bindValue(4, $postDTO->getCidade());
            $stmt->bindValue(5, $postDTO->getUsuario_idusuario());
            $stmt->bindValue(6, $postDTO->getCurso_idcurso());
            
            //echo "<br>curso:" . $postDTO->getCurso_idcurso();
            // echo "<br>mensagem:" . $postDTO->getMensagem();
             // echo "<br>Preco:" . $postDTO->getPreco();
             //  echo "<br>Estado:" . $postDTO->getEstado();
             //   echo "<br>Cidade:" . $postDTO->getCidade();
               //  echo "<br>Usuario:" . $postDTO->getUsuario_idusuario();
            //exit;
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirpost($idpost) {
        try {
            $sql = "DELETE FROM post 
                   WHERE idpost = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idpost);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getpostById($idpost) {
        try {
            $sql = "SELECT * FROM post WHERE idpost = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idpost);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updatepostById(postDTO $postDTO) {
        try {
            $sql = "UPDATE post SET   mensagem=?,
                                       preco=?,
                                       estado=?,
                                       cidade=?
                                      
                    WHERE idpost= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $postDTO->getMensagem());
            $stmt->bindValue(2, $postDTO->getPreco());
            $stmt->bindValue(3, $postDTO->getEstado());
            $stmt->bindValue(4, $postDTO->getCidade());
            $stmt->bindValue(5, $postDTO->getIdpost());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
