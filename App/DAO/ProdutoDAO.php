<?php


class ProdutoDAO
{
    
    private $conexao;


    
    public function __construct()
    {
        
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";

        
        $this->conexao = new PDO($dsn, 'root', 'cajuru@2022');
    }


   
    public function insert(ProdutoModel $model)
    {
        
        $sql = "INSERT INTO Produto (nome, cpf, data_nascimento) VALUES (?, ?, ?) ";


        
        $stmt = $this->conexao->prepare($sql);


       
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_fabricacao);
        $stmt->bindValue(3, $model->data_validade);

        
        $stmt->execute();
    }


    
    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE Produto SET nome=?, cpf=?, data_nascimento=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->data_fabricacao);
        $stmt->bindValue(3, $model->data_validade);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }


    
    public function select()
    {
        $sql = "SELECT * FROM Produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

       
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM Produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel"); 
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM Produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}