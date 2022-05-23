<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produto</legend>

        <form method="post" action="/Produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="data_fabricacao">:</label>
            <input id="datafabri" name="data de fabrição" value="<?= $model->data ?>" type="date" />

            <label for="data_validade">:</label>
            <input id="data_validade" value="<?= $model->data_validade ?>" name="data_validade" type="date" />

            <button type="submit">Salvar</button>
        </form>
    </fieldset>


</body>
</html> 