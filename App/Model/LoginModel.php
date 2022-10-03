<?php
namespace App\Model;
use App\DAO\LoginDAO;

class LoginModel extends Model
{
  
    public $ID, $NOME; $EMAIL $SENHA


   
   

      public function AUTENTICAR()
    {
        
        
        $dao = new LoginDAO(); 

       
        $dados_usuario_logado = $dao->selectByEmailAndSenha( $this->NOME, $this->EMAIL, $this->SENHA);

        if(is_object($dados_usuario_logado))
            return $dados_usuario_logado;
        else
            null;
    }
}

  
    