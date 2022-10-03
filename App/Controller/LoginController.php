<?php

namespace App\Controller;
use App\Model\LoginModel;

class LoginController extends Controller
{
    
    public static function index()
    {
        parent::render('Login/FormLogin');
    }

     public static function auth()
    {
        $model = new LoginModel();

        $model->NOME = $_POST['NOME'];
        $model->EMAIL = $_POST['email'];
        $model->SENHA = $_POST['senha'];
    
    
     $usuario_logado =$model->autenticar();
   if ($usuario_logado !== null) {
     
    $_SESSION['usuario_logado'] = $usuario_logado;
    header("location: /");
   
    }else
    header("location: /login?erro=true");
       
    }

    public static 
      
    public static function logout()
    {
        unset($_SESSION['usuario_logado']);

        parent::isAuthenticated();
    }
} 
   