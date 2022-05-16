<?php

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 */
class ProdutoController 
{
    /**
     * Os métodos index serão usados para devolver uma View.
     */
    public static function index()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.

        $model = new ProdutoModel(); // Instância da Model
        $model->getAllRows(); // Obtendo todos os registros, abastecendo a propriedade $rows da model.

        include 'View/modules/Produto/ListaProduto.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }


    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.
        $model = new ProdutoModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.

        include 'View/modules/Produto/FormProduto.php'; // Include da View. Note que a variável $model está disponível na View.
    }


    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save()
    {
       include 'Model/ProdutoModel.php'; // inclusão do arquivo model.

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->cpf = $_POST['data_fabricacao'];
       $model->data_nascimento = $_POST['data_validade'];

       $model->save(); // chamando o método save da model.

       header("Location: /Produto"); // redirecionando o usuário para outra rota.
    }


    /**
     * Método para tratar a rota delete. 
     */
    public static function delete()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /Produto"); // redirecionando o usuário para outra rota.
    }
} 