<?php
// Verifica se o formulário foi enviado via POST com algum dado
if(!empty($_POST)){
    // Inclui o arquivo do controller para lidar com a lógica da edição da tarefa/aluno
    include_once __DIR__ . "/../../Controller/TarefaController.php";

    // Cria uma instância do controller
    $controller = new TarefaController();

    // Chama o método editar() do controller, que deve receber e processar os dados enviados
    $controller->editar();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno</title>
</head>
<body>
<!-- Formulário para editar o nome do aluno -->
<form action="#" method="POST">
    <!-- textarea para editar o nome do aluno -->
    <textarea name="nome" placeholder="Nome"></textarea>

    <!-- Input hidden para enviar o id do aluno, obtido via GET -->
    <input name="id" type="hidden" value="<?=$_GET['id']?>"></>

<!-- Botão para enviar o formulário -->
<button type="submit">Atualizar nome</button>
</form>
</body>
</html>
