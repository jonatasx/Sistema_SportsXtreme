<?php

require_once 'conexao/conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($usuario,$senha) {
        try {
            $sql = "SELECT u.email,p.perfil, u.idusuario,u.nomecompleto FROM usuario u
                    INNER JOIN perfil p ON (u.perfil = p.idperfil)
                    WHERE email=? AND senha=?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
