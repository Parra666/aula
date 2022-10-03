<?php

namespace App\Controller;
use App\Model\CategoriaModel;

class CategoriaController 
{
    
    public static function index()
    {
        include 'Model/CategoriasModel.php'; 

        $model = new CategoriaModel(); 
        $model->getAllRows(); 

        include 'View/modules/Categorias/ListaCategorias.php'; 
    }

     public static function form()
    {
        include 'Model/CategoriasModel.php'; 
        $model = new CategoriaModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/Categorias/FormCategorias.php'; 
    }

       public static function save()
    {
       include 'Model/CategoriasModel.php'; 
       $model = new CategoriaModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
    
        $model->save(); 

       header("Location: /Categorias"); 
    }

      public static function delete()
    {
        include 'Model/CategoriasModel.php'; 
        $model = new CategoriaModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Categorias"); 
    }
} 