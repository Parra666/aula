<?php

include 'Controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
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

case '/produto':
        
    produtocontroller::index();
break;

case '/produto/form':
    produtocontroller::form();
break;

case '/produto/form/save':
    produtocontroller::save();
break;

case '/produto/delete':
    produtocontroller::delete();
break;

default:
    echo "Erro 404";
break;

case '/categorias':
        
    CategoriasController::index();
break;

case '/categoria/form':
    categoriasController::form();
break;

case '/categoria/form/save':
    CategoriasController::save();
break;

case '/categoria/delete':
    PessoaController::delete();
break;

default:
    echo "Erro 404";
break;
}