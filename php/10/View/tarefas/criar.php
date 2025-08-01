<?php
// Verifica se o formulário foi enviado com dados via POST
if(!empty($_POST)){
    // Inclui o arquivo do controller que contém a lógica para criar uma tarefa/aluno
    include_once __DIR__ . "/../../Controller/TarefaController.php";

    // Cria uma instância do controller de tarefas
    $controller = new TarefaController();

    // Chama o método criar(), que deve processar os dados enviados e criar o aluno
    $controller->criar();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar aluno</title>
</head>
<body>
<!-- Formulário para criar um novo aluno -->
<form action="#" method="POST">
    <!-- Campo textarea para digitar o nome do aluno -->
    <textarea name="nome" placeholder="Nome"></textarea>
    <!-- Botão para enviar o formulário e disparar a criação -->
    <button type="submit">Criar aluno</button>
</form>
</body>
</html>
