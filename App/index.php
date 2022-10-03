<?php

include 'Controller/PessoaController.php';

use App\Controller\CategoriasController;
use App\Controller\PessoaController;
use App\Controller\ProdutoController;

use 

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case "/";
        echo "página inicial";
    break;

    
    
    
    case '/pessoa':
        
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    default:
        echo "Erro 404";
    break;
   
   
    
    
    case '/':
        echo "página inicial";
    break;

     case '/produto':
        
        produtocontroller::index();
    break;

    case '/pessoa/form':
        produtocontroller::form();
    break;

    case '/pessoa/form/save':
        produtocontroller::save();
    break;

    case '/pessoa/delete':
        produtocontroller::delete();
    break;

    case '/':
        echo "página inicial";
    break;

    
    
    
    case '/Categoria':
        
        CategoriasController::index();
    break;

    case '/categoria/form':
        CategoriasController::form();
    break;

    case '/categoria/form/save':
        CategoriasController::save();
    break;

    case '/categoria/delete':
        categoriasController::delete();
    break;

    
}








