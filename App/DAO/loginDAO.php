<?php
namespace App\DAO;
use App\Model\LoginModel;
use \PDO;

class LoginDAO extends DAO
{
     
    public function __construct()
    {
        parent::__construct();
    }

    public function selectByEmailAndSenha( $NOME, $EMAIL, $SENHA)
    {
        $sql = "SELECT * FROM usuario WHERE NOME = ? AND SENHA = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $NOME);
        $stmt->bindValue(1, $EMAIL);
        $stmt->bindValue(2, $SENHA);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\LoginModel"); 
    }



}