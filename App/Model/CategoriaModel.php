<?php
namespace App\Model;
use App\DAO\CategoriaDAO;

class CategoriaModel
{
  
    public $id, $nome;


   
    public $rows;

      public function save()
    {
        include 'DAO/CategoriaDAO.php'; 

        
        $dao = new CategoriaDAO(); 

       
        if(empty($this->id))
        {
          
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }


  
    public function getAllRows()
    {
        include 'DAO/CategoriaDAO.php'; 
        
      
        $dao = new CategoriaDAO();

       
        $this->rows = $dao->select();
    }


    public function getById(int $id)
    {
        include 'DAO/CategoriaDAO.php'; 

        $dao = new CategoriaDAO();

        $obj = $dao->selectById($id); 
        return ($obj) ? $obj : new CategoriaModel();

        
    }


   
    public function delete(int $id)
    {
        include 'DAO/CategoriaDAO.php'; 

        $dao = new CategoriaDAO();

        $dao->delete($id);
    }
   

 }