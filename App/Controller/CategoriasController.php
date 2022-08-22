<?php

namespace App\Controller;
use App\Model\CategoriaModel;

class CategoriasController 
{
    
    public static function index()
    {
        include 'Model/CategoriaModel.php'; 

        $model = new CategoriaModel(); 
        $model->getAllRows(); 

        include 'View/modules/Categoria/ListaCategoria.php'; 
    }

     public static function form()
    {
        include 'Model/CategoriaModel.php'; 
        $model = new CategoriaModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/Categoria/FormCategoria.php'; 
    }

       public static function save()
    {
       include 'Model/CategoriaModel.php'; 
       $model = new CategoriaModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
    
        $model->save(); 

       header("Location: /Categoria"); 
    }

      public static function delete()
    {
        include 'Model/CategoriaModel.php'; 
        $model = new CategoriaModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Categoria"); 
    }
} 